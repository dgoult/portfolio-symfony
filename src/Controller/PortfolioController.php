<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    /**
     * @Route("/", name="portfolio")
     */
    public function index()
    {
        return $this->render('portfolio/index.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);  
    }

    /**
     * @Route("/cv", name="cv")
     */
    public function cv() {
        return $this->render('portfolio/cv.html.twig');
    }

    /**
     * @Route("/vt", name="veille_techno")
     */
    public function vt() {
        return $this->render('portfolio/vt.html.twig');
    }

    /**
     * @Route("/gpi", name="gest_patr_info")
     */
    public function gpi() {
        return $this->render('portfolio/gpi.html.twig');
    }

    /**
     * @Route("/ct", name="compet_techno")
     */
    public function ct() {
        return $this->render('portfolio/ct.html.twig');
    }
}

