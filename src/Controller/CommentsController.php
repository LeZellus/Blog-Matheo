<?php

namespace App\Controller;

use App\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class CommentsController extends AbstractController
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('comments/index.html.twig', [
            'controller_name' => 'CommentsController',
        ]);
    }

    /**
     * @param Comment $comment
     * @return RedirectResponse
     */
    public function validComment(Comment $comment): RedirectResponse
    {
        $comment->setIsValid(1);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($comment);
        $entityManager->flush();

        return $this->redirectToRoute('app_admin');
    }

    /**
     * @param Comment $comment
     * @return RedirectResponse
     */
    public function removeComment(Comment $comment): RedirectResponse
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($comment);
        $entityManager->flush();

        return $this->redirectToRoute('app_admin');
    }
}
