<?php

namespace App\Controller;

use App\Repository\CarvingRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class CarvingController extends AbstractController
{
    /**
     * @return Response
     * @Route("/woods", name="carvingwoods")
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
    /**
     * @return Response
     * @Route("/stone", name="carvingstone")
     */
    public function stone(CarvingRepository $carvingRepository): Response
    {
        
        return $this->render('carving/carvingstone.html.twig', [
            'controller_name' => 'CarvingController',
            'bois' => $carvingRepository->findBy([
                'support'=>'pierre'
        ])
        ]);
    }
 }
