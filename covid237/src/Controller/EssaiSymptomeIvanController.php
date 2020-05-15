<?php

namespace App\Controller;

use DateTime;
use \App\Entity\Symptomes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EssaiSymptomeIvanController extends AbstractController
{
    /**
     * @Route("/essai/symptome/ivan", name="essai_symptome_ivan")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Symptomes::class);

        $symptomes = $repo->findAll();

        $date = new DateTime();

        return $this->render('essai_symptome_ivan/index.html.twig',
            [
                'controller_name' => 'EssaiSymptomeIvanController',
                'symptomes' => $symptomes,
                'date' => $date
            ]
        );
    }
}
