<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('default/blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    /**
     * @Route("/blog-single", name="blog-single")
     */
    public function blog_single()
    {
        return $this->render('blog/blog-single.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}
