<?php
declare(strict_types=1);

/* Le code de cette page fut réalisé par Bruno Prédot - 11/2019
created by Prédot Bruno - 11/2019 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;


class HomeController extends AbstractController
{

    /**
     * @var Environment
     */
    private $twig;

    public function __construct(Environment $twig){
        $this->twig = $twig;
    }


    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function index():Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
