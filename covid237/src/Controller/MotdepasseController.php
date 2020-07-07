<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MotdepasseController extends AbstractController
{
    /**
     * @Route("/motdepasse", name="motdepasse")
     */
    public function index(Request $request)
    {
        
        $form = $request->get( 'reinitialiser' );
       
       /* if ($form->isSubmitted() && $form->isValid() ) {
            return $this->redirectToRoute('nom_de_la_route');                
        } */

        if ($form->isSubmitted() && $form->isValid() )
        {
            return $this->redirectToRoute('reinitialisation_motdepasse');               
        }

        return $this->render('motdepasse/index.html.twig', [
            'controller_name' => 'MotdepasseController',
        ]);
    }
}
