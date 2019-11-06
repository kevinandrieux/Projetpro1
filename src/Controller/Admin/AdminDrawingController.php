<?php

namespace App\Controller\Admin;

use App\Entity\Drawing;
use App\Form\DrawingType;
use App\Repository\DrawingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/Drawing")
 */
class AdminDrawingController extends AbstractController
{
    /**
     * @Route("/", name="drawing_index", methods={"GET"})
     */
    public function index(DrawingRepository $DrawingRepository): Response
    {
        return $this->render('Admin/Drawing/index.html.twig', [
            'drawings' => $DrawingRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="drawing_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $Drawing = new Drawing();
        $form = $this->createForm(DrawingType::class, $Drawing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Drawing);
            $entityManager->flush();

            return $this->redirectToRoute('Drawing_index');
        }

        return $this->render('Admin/Drawing/new.html.twig', [
            'Drawing' => $Drawing,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="drawing_show", methods={"GET"})
     */
    public function show(Drawing $Drawing): Response
    {
        return $this->render('Admin/Drawing/show.html.twig', [
            'Drawing' => $Drawing,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="drawing_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Drawing $Drawing): Response
    {
        $form = $this->createForm(DrawingType::class, $Drawing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('Drawing_index');
        }

        return $this->render('Admin/Drawing/edit.html.twig', [
            'Drawing' => $Drawing,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="drawing_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Drawing $Drawing): Response
    {
        if ($this->isCsrfTokenValid('delete'.$Drawing->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($Drawing);
            $entityManager->flush();
        }

        return $this->redirectToRoute('drawing_index');
    }
}
