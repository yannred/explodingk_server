<?php

namespace App\Controller;

use Service\Wsocket;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $ws = new Wsocket();
        $ws->lancerServeur();

        return;

//        return $this->render('home/index.html.twig', [
//            'controller_name' => __CLASS__,
//            'message'=> 'Connexion Websocket initiée'
//        ]);
    }
}
