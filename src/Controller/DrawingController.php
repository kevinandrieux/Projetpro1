<?php

namespace App\Controller;


use App\Repository\DrawingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DrawingController extends AbstractController
{

    /**
     * @Route("encrechine ", name="china_show")
     */
    public function china():Response
    {
        return $this->render('drawing/china.html.twig');
    }
    /**
     * @Route("fantadrawing ", name="fanta_show")
     */
    public function fanta():Response
    {
        return $this->render('drawing/fanta.html.twig');
    }
    /**
     * @Route("apocalypse ", name="apod_show")
     */
    public function apod():Response
    {
        return $this->render('drawing/apocalypse.html.twig');
    }
    /**
     * @Route("croquis ", name="croquis_show")
     */
    public function croquis():Response
    {
        return $this->render('drawing/croquis.html.twig');
    }
    /**
     * @Route("erotique ", name="erotique_show")
     */
    public function erotique():Response
    {
        return $this->render('drawing/erotique.html.twig');
    }
    /**
     * @Route("architecture ", name="archi_show")
     */
    public function architecture():Response
    {
        return $this->render('drawing/architec.html.twig');
    }
  
    /**
     * @Route("colorpencil ", name="color_show")
     */
    public function color():Response
    {
        return $this->render('drawing/color.html.twig');
    }
  
}



