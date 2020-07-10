<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EnregController extends AbstractController
{
    /**
     * @Route("/enreg", name="enreg")
     */
    public function index()
    {
        return $this->render('enreg/index.html.twig', [
            'controller_name' => 'EnregController',
        ]);
    }
}
