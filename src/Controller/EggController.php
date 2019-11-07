<?php
declare(strict_types=1);

/* Le code de cette page fut réalisé par Bruno Prédot - 11/2019
created by Prédot Bruno - 11/2019 */

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