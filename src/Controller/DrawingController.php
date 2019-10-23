<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DrawingController extends AbstractController
{
    /**
     * @Route("encrechine ", name="China_show")
     */
    public function china():Response
    {
        return $this->render('drawing/china.html.twig');
    }
    
}
