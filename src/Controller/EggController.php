<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EggController extends AbstractController{

    /**
     * @return Response
     * @Route("oeufs", name="eggs_page")
     */
    public function eggsPage():Response
    {
        return $this->render('eggs/eggs.html.twig');
    }
}