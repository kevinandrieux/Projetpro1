<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaintingController extends AbstractController{

    /**
     * @return Response
     * @Route("aquarelles", name="watercolors_show")
     */
    public function watercolorsPage():Response
    {
        return $this->render('painting/watercolors.html.twig');
    }

    /**
     * @return Response
     * @Route("huile_classique", name="classicalOil_show")
     */
    public function classicalOil():Response
    {
        return $this->render('painting/paintingClassicalOil.html.twig');
    }

    /**
     * @return Response
     * @Route("huile_fantastique", name="fantasticalOil_show")
     */
    public function fanstasticalOil():Response
    {
        return $this->render('painting/fantasticalOil.html.twig');
    }
}