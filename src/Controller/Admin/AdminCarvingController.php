<?php

namespace App\Controller\Admin;

use App\Entity\Carving;
use App\Form\CarvingType;
use App\Repository\CarvingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/carving")
 */
class AdminCarvingController extends AbstractController
{
    /**
     * @Route("/", name="carving_index", methods={"GET"})
     */
    public function index(CarvingRepository $carvingRepository): Response
    {
        return $this->render('Admin/carving/index.html.twig', [
            'carvings' => $carvingRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="carving_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $carving = new Carving();
        $form = $this->createForm(CarvingType::class, $carving);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($carving);
            $entityManager->flush();

            return $this->redirectToRoute('carving_index');
        }

        return $this->render('Admin/carving/new.html.twig', [
            'carving' => $carving,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="carving_show", methods={"GET"})
     */
    public function show(Carving $carving): Response
    {
        return $this->render('Admin/carving/show.html.twig', [
            'carving' => $carving,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="carving_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Carving $carving): Response
    {
        $form = $this->createForm(CarvingType::class, $carving);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('carving_index');
        }

        return $this->render('Admin/carving/edit.html.twig', [
            'carving' => $carving,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="carving_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Carving $carving): Response
    {
        if ($this->isCsrfTokenValid('delete'.$carving->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($carving);
            $entityManager->flush();
        }

        return $this->redirectToRoute('carving_index');
    }
}
