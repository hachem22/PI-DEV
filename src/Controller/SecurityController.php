<?php

// src/Controller/SecurityController.php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Uid\Uuid;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // Last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
    
        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }
    #[Route('/dashboard', name: 'app_dashboard')]
    public function dashboard(): Response
    {
        // Get the current user and ensure it's an instance of Utilisateur
        $user = $this->getUser();
    
        if (!$user instanceof Utilisateur) {
            throw new \RuntimeException('Expected an instance of Utilisateur.');
        }
    
        // Debugging: Check the type of the user object
        dump(get_class($user));
    
        // Debugging: Check if the method exists
        dump(method_exists($user, 'getUtilisateurRole'));
    
        // Debugging: Check the authenticated user's roles
        dump($user->getRoles());
        dump($user->getUtilisateurRole());
    
        // Redirect based on role
        if (in_array('ROLE_ADMINISTRATEUR', $user->getRoles())) {
            return $this->redirectToRoute('app_utilisateur_index');
        } elseif (in_array('ROLE_PHARMACIEN', $user->getRoles())) {
            return $this->redirectToRoute('app_stock_pharmacie_index');
        } elseif (in_array('ROLE_PATIENT', $user->getRoles())) {
            return $this->redirectToRoute('app_patient_index');
        }
    
        // Default fallback
        return $this->redirectToRoute('app_login');
    }
    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        // This method can be blank - it will be intercepted by the logout key on your firewall.
    }

    // src/Controller/SecurityController.php

    #[Route('/forgot-password', name: 'app_forgot_password')]
    public function forgotPassword(Request $request, UtilisateurRepository $utilisateurRepository, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
    
            // Find the user by email
            $user = $utilisateurRepository->findOneByEmail($email); // Use the repository method
    
            if ($user) {
                // Generate a reset token
                $resetToken = Uuid::v4()->toRfc4122();
                $user->setResetToken($resetToken);
                $user->setResetTokenExpiresAt(new \DateTime('+1 hour')); // Token expires in 1 hour
    
                $entityManager->flush();
    
                // Send the email
                $email = (new TemplatedEmail())
                    ->from('no-reply@yourdomain.com')
                    ->to($user->getEmail())
                    ->subject('Password Reset Request')
                    ->htmlTemplate('emails/reset_password.html.twig')
                    ->context([
                        'resetToken' => $resetToken,
                        'user' => $user,
                    ]);
    
                $mailer->send($email);
    
                $this->addFlash('success', 'A password reset link has been sent to your email.');
            } else {
                $this->addFlash('error', 'No account found with this email.');
            }
        }
    
        return $this->render('auth-forgot-password-basic.html.twig');
    }

    // src/Controller/SecurityController.php

#[Route('/reset-password/{token}', name: 'app_reset_password')]
public function resetPassword(
    Request $request,
    string $token,
    UtilisateurRepository $utilisateurRepository,
    EntityManagerInterface $entityManager
): Response {
    // Find the user by the reset token
    $user = $utilisateurRepository->findOneBy(['resetToken' => $token]);

    if (!$user || $user->getResetTokenExpiresAt() < new \DateTime()) {
        $this->addFlash('error', 'Invalid or expired reset token.');
        return $this->redirectToRoute('app_forgot_password');
    }

    if ($request->isMethod('POST')) {
        $newPassword = $request->request->get('password');

        // Store the new password in plain text (not recommended for production)
        $user->setPassword($newPassword);

        // Clear the reset token
        $user->setResetToken(null);
        $user->setResetTokenExpiresAt(null);

        $entityManager->flush();

        $this->addFlash('success', 'Your password has been reset successfully.');
        return $this->redirectToRoute('app_login');
    }

    return $this->render('security/reset_password.html.twig', [
        'token' => $token,
    ]);
}
}
