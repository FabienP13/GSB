<?php

namespace App\Controller;

use App\Repository\RoleRepository;
use App\Repository\VisiteurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ConnexionController extends AbstractController
{
    /**
     * @Route("/", name="account_login")
     */
    public function login(VisiteurRepository $visiteurRepo)
    {
        return $this->render('connexion/login.html.twig', [
             'visiteurs' => $visiteurRepo->findAll()   
        ]);
    }
}
