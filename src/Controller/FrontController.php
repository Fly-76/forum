<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        $title = "Bienvennue sur Symfony";
        $subtitle = "Atelier Symphony";
        return $this->render('front/index.html.twig', [
            'title' => $title,
            'subtitle' => $subtitle
        ]);
    }
}
