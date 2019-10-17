<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EggController extends AbstractController{

    /**
     * @return Response
     * @Route("aquarelles", name="watercolors_show")
     */
    public function aquarelle():Response
    {
        return $this->render('painting/aquarelles.html.twig');
    }
}