<?php

namespace App\Controller;

use App\Repository\VisiteurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="accueil")
     */
    public function index()
    {
        return $this->render('home/accueil.html.twig');
    }
}
