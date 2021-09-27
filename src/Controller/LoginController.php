<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function index(): Response
    {

        $title ="Connexion"; 

        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
            'title' => $title
        ]);
    }

    #[Route('/logout', name: 'logout')]
    public function logout(): Response
    {
        
    }
}
