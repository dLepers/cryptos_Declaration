<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EntreeController extends AbstractController
{
    /**
     * @Route("/entree", name="entree")
     */
    public function index(): Response
    {
        return $this->render('entree/index.html.twig', [
        ]);
    }
}
