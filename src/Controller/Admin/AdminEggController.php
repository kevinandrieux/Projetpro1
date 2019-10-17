<?php

namespace App\Controller\Admin;

use App\Entity\Egg;
use App\Form\EggType;
use App\Repository\EggRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/egg")
 */
class AdminEggController extends AbstractController
{
    /**
     * @Route("/", name="egg_index", methods={"GET"})
     * @param EggRepository $eggRepository
     * @return Response
     */
    public function index(EggRepository $eggRepository): Response
    {
        return $this->render('admin/egg/index.html.twig', [
            'eggs' => $eggRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="egg_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $egg = new Egg();
        $form = $this->createForm(EggType::class, $egg);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($egg);
            $entityManager->flush();

            return $this->redirectToRoute('egg_index');
        }

        return $this->render('admin/egg/new.html.twig', [
            'egg' => $egg,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="egg_show", methods={"GET"})
     * @param Egg $egg
     * @return Response
     */
    public function show(Egg $egg): Response
    {
        return $this->render('admin/egg/show.html.twig', [
            'egg' => $egg,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="egg_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Egg $egg
     * @return Response
     */
    public function edit(Request $request, Egg $egg): Response
    {
        $form = $this->createForm(EggType::class, $egg);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('egg_index');
        }

        return $this->render('admin/egg/edit.html.twig', [
            'egg' => $egg,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="egg_delete", methods={"DELETE"})
     * @param Request $request
     * @param Egg $egg
     * @return Response
     */
    public function delete(Request $request, Egg $egg): Response
    {
        if ($this->isCsrfTokenValid('delete'.$egg->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($egg);
            $entityManager->flush();
        }

        return $this->redirectToRoute('egg_index');
    }
}
