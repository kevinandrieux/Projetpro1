<?php

namespace App\Controller;


use App\Repository\NumericalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class NumericController extends AbstractController
{

    /**
     * @Route("numarch ", name="numarch_show")
     */
    public function narch():Response
    {
        return $this->render('numeric/narchitect.html.twig');
    }
    /**
     * @Route("numericc ", name="numerics_show")
     */
    public function numerics():Response
    {
        return $this->render('numeric/nclassiques.html.twig');
    }
    /**
     * @Route("nzywuikx ", name="nzywuikx_show")
     */
    public function nzywuikx():Response
    {
        return $this->render('numeric/nzywuikx.html.twig');
    }
    
}



