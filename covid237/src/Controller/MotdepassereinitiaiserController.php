<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MotdepassereinitiaiserController extends AbstractController
{
    /**
     * @Route("/motdepassereinitiaiser", name="motdepassereinitiaiser")
     */
    public function index()
    {
        return $this->render('motdepassereinitiaiser/index.html.twig', [
            'controller_name' => 'MotdepassereinitiaiserController',
        ]);
    }
}
