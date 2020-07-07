<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NouvMotDePasseController extends AbstractController
{
    /**
     * @Route("/nouv/mot/de/passe", name="nouv_mot_de_passe")
     */
    public function index()
    {
        return $this->render('nouv_mot_de_passe/index.html.twig', [
            'controller_name' => 'NouvMotDePasseController',
        ]);
    }

    /**
     * @Route("/motdepasse_ok", name="motdepasse_ok")
     */
    public function motdepasseok()
    {
        return $this->render('motdepassereinitiaiser/index.html.twig');
    }
}
