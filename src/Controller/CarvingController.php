<?php

namespace App\Controller;

use App\Repository\CarvingRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    /**
     * @Route("/carving")
    */

class CarvingController extends AbstractController
{
    /**
     * @Route("/", name="carvingwoods")
     */
    public function woods(CarvingRepository $carvingRepository): Response
    {
        
        return $this->render('carving/carvingwood.html.twig', [
            'controller_name' => 'CarvingController',
            'bois' => $carvingRepository->findBy([
                'support'=>'bois'
        ])
        ]);
    }
//     /**
//      * @Route("/stone", name="carvingwoods")
//      */
//     public function stone(CarvingRepository $carvingRepository): Response
//     {
        
//         return $this->render('carving/carvingwood.html.twig', [
//             'controller_name' => 'CarvingController',
//             'bois' => $carvingRepository->findBy([
//                 'support'=>'pierre'
//         ])
//         ]);
//     }
 }
