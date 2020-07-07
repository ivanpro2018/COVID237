<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ReinitialisationMotdepasseController extends AbstractController
{
    /**
     * @Route("/reinitialisation/motdepasse", name="reinitialisation_motdepasse")
     */
    public function index()
    {
        return $this->render('reinitialisation_motdepasse/index.html.twig', [
            'controller_name' => 'ReinitialisationMotdepasseController',
        ]);
    }
}
