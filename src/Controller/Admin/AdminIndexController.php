<?php
declare(strict_types=1);

/* Le code de cette page fut réalisé par Bruno Prédot - 11/2019
created by Prédot Bruno - 11/2019 */

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminIndexController extends AbstractController{

    /**
     * @return Response
     * @Route("admin/home", name="indexAdministration")
     */
    public function indexAdmin():Response
    {
        return $this->render('admin/adminIndex.html.twig');
    }

}