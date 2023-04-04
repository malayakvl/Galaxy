<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GalaxyController extends AbstractController
{
    /**
     * @Route("/galaxy", name="galaxy")
     */
    public function index()
    {
        $galaxies = $this->getDoctrine()
            ->getRepository('App:Galaxy')
            ->findAll();

        $uniqueStars = $this->getDoctrine()->getRepository('App:Star')
            ->uniqueStars('', array(1, 2, 10, 11, 12));

        return $this->render('galaxy/index.html.twig', [
            'galaxies' => $galaxies,
            'uniqueStars' => $uniqueStars
        ]);
    }
}
