<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PatientController extends AbstractController
{#[Route('/patient', name: 'patient_dashboard')]
    public function dashboard()
    {
        return $this->render('patient/basePatient.html.twig');
    }
    #[Route('/Login', name: 'Login')]
    public function login()
    {
        return $this->render('Login.html.twig');
    }
    #[Route('/patient/rendezVous', name: 'rendezVous')]
    public function rendezVous()
    {
        return $this->render('rendez-vous.html.twig');
    }
}
