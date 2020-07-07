<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AuthentificationController extends AbstractController
{
    /**
     * @Route("/authentification", name="authentification")
     */
    public function index()
    {
        return $this->render('authentification/index.html.twig', [
            'controller_name' => 'AuthentificationController',
        ]);
    }
     /**
     * @Route("/motdepasse_oublier", name="motdepasse_oublier")
     */
    public function motdepasseoublier()
    {
        return $this->render('motdepasse/index.html.twig');
    }

}
