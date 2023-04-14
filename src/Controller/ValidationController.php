<?php

namespace App\Controller;

use App\Entity\Validation;
use App\Form\ValidationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/validation')]
class ValidationController extends AbstractController
{
    #[Route('/', name: 'app_validation_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $validations = $entityManager
            ->getRepository(Validation::class)
            ->findAll();

        return $this->render('validation/index.html.twig', [
            'validations' => $validations,
        ]);
    }

    #[Route('/new', name: 'app_validation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $validation = new Validation();
        $form = $this->createForm(ValidationType::class, $validation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($validation);
            $entityManager->flush();

            return $this->redirectToRoute('app_validation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('validation/new.html.twig', [
            'validation' => $validation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_validation_show', methods: ['GET'])]
    public function show(Validation $validation): Response
    {
        return $this->render('validation/show.html.twig', [
            'validation' => $validation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_validation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Validation $validation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ValidationType::class, $validation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_validation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('validation/edit.html.twig', [
            'validation' => $validation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_validation_delete', methods: ['POST'])]
    public function delete(Request $request, Validation $validation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$validation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($validation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_validation_index', [], Response::HTTP_SEE_OTHER);
    }
}
