<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\UtilisateurType;
use App\Enum\UtilisateurRole;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Psr\Log\LoggerInterface;

#[Route('/utilisateur')]
final class UtilisateurController extends AbstractController
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    #[Route(name: 'app_utilisateur_index', methods: ['GET'])]
    public function index(UtilisateurRepository $utilisateurRepository): Response
    {
        return $this->render('utilisateur/index.html.twig', [
            'utilisateurs' => $utilisateurRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_utilisateur_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, UserPasswordHasherInterface $passwordHasher): Response
{
    // Create new user
    $utilisateur = new Utilisateur();
    $form = $this->createForm(UtilisateurType::class, $utilisateur);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Generate random password
        $plainPassword = bin2hex(random_bytes(4)); // Generates an 8-character password
        
        // Hash the password
        $hashedPassword = $passwordHasher->hashPassword($utilisateur, $plainPassword);
        $utilisateur->setPassword($hashedPassword);
        
        // Persist the user entity
        $entityManager->persist($utilisateur);
        $entityManager->flush();

        // Send email with the hashed password
        $email = (new Email())
            ->from('haythemdridi@gmail.com') // Sender email
            ->to($utilisateur->getEmail()) // Recipient email
            ->subject('Your Account Credentials')
            ->html("
                <p>Hello {$utilisateur->getNom()},</p>
                <p>Your account has been successfully created. Here are your login details:</p>
                <ul>
                    <li><strong>Email:</strong> {$utilisateur->getEmail()}</li>
                    <li><strong>Password:</strong> {$plainPassword}</li>
                </ul>
                <p>Please change your password after logging in.</p>
            ");

        // Send the email
        $mailer->send($email);

        // Redirect after email is sent
        return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('utilisateur/new.html.twig', [
        'utilisateur' => $utilisateur,
        'form' => $form->createView(),
    ]);
}


    #[Route('/utilisateur/{id}', name: 'app_utilisateur_show')]
    public function show(int $id, UtilisateurRepository $repository): Response
    {
        $utilisateur = $repository->find($id);
        
        if (!$utilisateur) {
            throw $this->createNotFoundException('Utilisateur non trouvé.');
        }
    
        return $this->render('utilisateur/show.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }
    

    #[Route('/{id}/edit', name: 'app_utilisateur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Utilisateur $utilisateur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('utilisateur/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_utilisateur_delete', methods: ['POST'])]
    public function delete(Request $request, Utilisateur $utilisateur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $utilisateur->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($utilisateur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/medecins', name: 'app_medecin_list')]
    public function medecinList(UtilisateurRepository $utilisateurRepository): Response
    {
        $medecins = $utilisateurRepository->findBy(['utilisateurRole' => UtilisateurRole::Medecin]);
    
        return $this->render('utilisateur/medecinList.html.twig', [
            'medecins' => $medecins,
        ]);
    }
    #[Route('/responsables', name: 'app_responsable_list')]
    public function responsableList(UtilisateurRepository $utilisateurRepository): Response
    {
        $responsables = $utilisateurRepository->findBy(['utilisateurRole' => UtilisateurRole::Responsable]);
    
        return $this->render('utilisateur/responsableList.html.twig', [
            'responsables' => $responsables,
        ]);
    }
    #[Route('/pharmaciens', name: 'app_pharmacien_list')]
    public function pharmacienList(UtilisateurRepository $utilisateurRepository): Response
    {
        $pharmaciens = $utilisateurRepository->findBy(['utilisateurRole' => UtilisateurRole::Pharmacien]);
    
        return $this->render('utilisateur/PharmacienList.html.twig', [
            'pharmaciens' => $pharmaciens,
        ]);
    }
    #[Route('/femmeDeMenages', name: 'app_femmeDeMenage_list')]
    public function femmeDeMenagesList(UtilisateurRepository $utilisateurRepository): Response
    {
        $femmesDeMenage  = $utilisateurRepository->findBy(['utilisateurRole' => UtilisateurRole::FemmeDeMenage]);
    
        return $this->render('utilisateur/femmeDeMenagesList.html.twig', [
            'femmesDeMenage' => $femmesDeMenage ,
        ]);
    }
    #[Route('/patients', name: 'app_patient_list')]
    public function patientsList(UtilisateurRepository $utilisateurRepository): Response
    {
        $patients  = $utilisateurRepository->findBy(['utilisateurRole' => UtilisateurRole::Patient]);
    
        return $this->render('utilisateur/patientsList.html.twig', [
            'patients' => $patients ,
        ]);
    }
    #[Route('/infirmiers', name: 'app_infirmier_list')]
    public function infirmiersList(UtilisateurRepository $utilisateurRepository): Response
    {
        $infirmiers  = $utilisateurRepository->findBy(['utilisateurRole' => UtilisateurRole::Infirmier]);
    
        return $this->render('utilisateur/infirmiersList.html.twig', [
            'infirmiers' => $infirmiers ,
        ]);
    }
}
