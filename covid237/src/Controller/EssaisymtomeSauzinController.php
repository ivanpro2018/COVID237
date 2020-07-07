<?php

namespace App\Controller;

use App\Entity\Symptomes;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EssaisymtomeSauzinController extends AbstractController
{
    /**
     * @Route("/essaisymtome/sauzin", name="essaisymtome_sauzin")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Symptomes::class);

        $symptomes = $repo->findAll();
        $date = new DateTime(); 


        return $this->render('essaisymtome_sauzin/index.html.twig', [
            'controller_name' => 'EssaisymtomeSauzinController',
            'symptomes' => $symptomes,
            'date' =>$date 
        ]);
    }
}
