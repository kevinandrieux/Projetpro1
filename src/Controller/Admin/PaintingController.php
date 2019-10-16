<?php

namespace App\Controller\Admin;

use App\Entity\Painting;
use App\Form\PaintingType;
use App\Repository\PaintingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/painting")
 */
class PaintingController extends AbstractController
{
    /**
     * @Route("/", name="painting_index", methods={"GET"})
     * @param PaintingRepository $paintingRepository
     * @return Response
     */
    public function index(PaintingRepository $paintingRepository): Response
    {
        return $this->render('admin/painting/index.html.twig', [
            'paintings' => $paintingRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="painting_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $painting = new Painting();
        $form = $this->createForm(PaintingType::class, $painting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($painting);
            $entityManager->flush();

            return $this->redirectToRoute('painting_index');
        }

        return $this->render('admin/painting/new.html.twig', [
            'painting' => $painting,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="painting_show", methods={"GET"})
     * @param Painting $painting
     * @return Response
     */
    public function show(Painting $painting): Response
    {
        return $this->render('admin/painting/show.html.twig', [
            'painting' => $painting,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="painting_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Painting $painting
     * @return Response
     */
    public function edit(Request $request, Painting $painting): Response
    {
        $form = $this->createForm(PaintingType::class, $painting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('painting_index');
        }

        return $this->render('admin/painting/edit.html.twig', [
            'painting' => $painting,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="painting_delete", methods={"DELETE"})
     * @param Request $request
     * @param Painting $painting
     * @return Response
     */
    public function delete(Request $request, Painting $painting): Response
    {
        if ($this->isCsrfTokenValid('delete'.$painting->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($painting);
            $entityManager->flush();
        }

        return $this->redirectToRoute('painting_index');
    }
}
