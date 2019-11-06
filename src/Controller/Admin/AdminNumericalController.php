<?php

namespace App\Controller\Admin;

use App\Entity\Numerical;
use App\Form\NumericalType;
use App\Repository\NumericalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/Numerical")
 */
class AdminNumericalController extends AbstractController
{
    /**
     * @Route("/", name="numerical_index", methods={"GET"})
     */
    public function index(NumericalRepository $NumericalRepository): Response
    {
        return $this->render('Admin/Numerical/index.html.twig', [
            'numericals' => $NumericalRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="numerical_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $numerical = new Numerical();
        $form = $this->createForm(NumericalType::class, $numerical);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($numerical);
            $entityManager->flush();

            return $this->redirectToRoute('Numerical_index');
        }

        return $this->render('Admin/Numerical/new.html.twig', [
            'numerical' => $numerical,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="numerical_show", methods={"GET"})
     */
    public function show(Numerical $numerical): Response
    {
        return $this->render('Admin/Numerical/show.html.twig', [
            'numerical' => $numerical,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="numerical_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, numerical $numerical): Response
    {
        $form = $this->createForm(numericalType::class, $numerical);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('numerical_index');
        }

        return $this->render('Admin/numerical/edit.html.twig', [
            'numerical' => $numerical,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="numerical_delete", methods={"DELETE"})
     */
    public function delete(Request $request, numerical $numerical): Response
    {
        if ($this->isCsrfTokenValid('delete'.$numerical->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($numerical);
            $entityManager->flush();
        }

        return $this->redirectToRoute('numerical_index');
    }
}
