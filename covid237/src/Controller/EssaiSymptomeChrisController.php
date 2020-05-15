<?php

namespace App\Controller;

use App\Entity\Symptomes;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EssaiSymptomeChrisController extends AbstractController
{
    /**
     * @Route("/essai/symptome/chris", name="essai_symptome_chris")
     */
    public function index()
    {
        $repo=$this->getDoctrine()->getRepository(Symptomes::class);

        $symptomes=$repo->findAll();

        $date= new DateTime();

        return $this->render('essai_symptome_chris/index.html.twig',
         [
            'controller_name' => 'EssaiSymptomeChrisController',
            'symptomes'=> $symptomes,
            'date'=> $date
        ]);
    }
}
