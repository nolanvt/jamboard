<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/blackbord", name="blackbord")
 */
class BlackbordController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index(): Response
    {

        return $this->render('blackboard/index2.html.twig', [
            'pageTitle' => 'Production',
            'rootTemplate' => 'blackboard',
            
        ]);
}
    /**
     * @Route("/essai2", name="essai2")
     */
    public function essai2(): Response
    {

        return $this->render('blackboard/essai2.html.twig', [
            'pageTitle' => 'Production',
            'rootTemplate' => 'blackboard',

        ]);
    }
}