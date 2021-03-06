<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Form\ArticleType;
use App\Entity\User;
use App\Form\CommentType;
use App\Repository\ArticleRepository;
use App\Repository\CommentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        $articles = $this->getDoctrine()->getRepository(Article::class)->findBy(
            ['isPublished' => true],
            ['publishedAt' => 'desc']
        );

        return $this->render('blog/index.html.twig', [
            'articles' => $articles
        ]);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function add(Request $request): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $article->setUpdatedAt(new \DateTime());

            if ($article->getThumb() !== null) {
                $file = $form->get('thumb')->getData();
                $fileName = uniqid() . '.' . $file->guessExtension();

                try {
                    $file->move(
                        $this->getParameter('images_directory'), /* The path where the file will be stock */
                        $fileName
                    );
                } catch (FileException $e) {
                    return new Response($e->getMessage());
                }

                $article->setThumb($fileName);
            }

            if ($article->getIsPublished()) {
                $article->setPublishedAt(new \DateTime());
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            $this->addFlash('success', 'L\'article a bien été créé');
            return $this->redirectToRoute("app_admin");
        }

        return $this->render('blog/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @param Article $article
     * @param Request $request
     * @return Response
     */
    public function edit(Article $article, Request $request): Response
    {
        $oldPicture = $article->getThumb();

        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $article->setUpdatedAt(new \DateTime());

            if ($article->getIsPublished()) {
                $article->setPublishedAt(new \DateTime());
            }

            if ($article->getThumb() !== null && $article->getThumb() !== $oldPicture) {
                $file = $form->get('thumb')->getData();
                $fileName = uniqid() . '.' . $file->guessExtension();

                try {
                    $file->move(
                        $this->getParameter('images_directory'),
                        $fileName
                    );
                } catch (FileException $e) {
                    return new Response($e->getMessage());
                }

                $article->setThumb($fileName);
            } else {
                $article->setThumb($oldPicture);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            $this->addFlash('success', 'L\'article a bien été modifié');
            return $this->redirectToRoute("app_admin");
        }

        return $this->render('blog/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @param Request $request
     * @param Article $article
     * @return Response
     */
    public function show(Request $request, Article $article): Response
    {
        $user = $this->getUser();

        $comments = $article->getComments();
        $comment = new Comment();
        $comment->setArticle($article);

        $formComment = $this->createForm(CommentType::class, $comment);
        $formComment->handleRequest($request);

        if($formComment->isSubmitted() && $formComment->isValid()){
            $comment->setCreatedAt(new \DateTime());
            $comment->setAuthor($user->getPseudo());
            $comment->setIsValid(0);

            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

            $this->addFlash("success", "Votre commentaire est soumis à une validation");
            return $this->redirectToRoute("blog_show", ['id'=> $article->getId()]);
        }

        return $this->render('blog/show.html.twig', [
            'article' => $article,
            'comments' => $comments,
            'form' => $formComment->createView(),
        ]);
    }

    /**
     * @param Article $article
     * @return RedirectResponse
     */
    public function remove(Article $article): RedirectResponse
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();

        $this->addFlash('success', 'L\'article a bien été supprimé');
        return $this->redirectToRoute('app_admin');
    }

    /**
     * @param ArticleRepository $articleRepository
     * @param CommentRepository $commentRepository
     * @return Response
     */
    public function admin(ArticleRepository $articleRepository, CommentRepository $commentRepository): Response
    {
        $articles = $articleRepository->findBy(
            [],
            ['updatedAt' => 'DESC']
        );

        $comments = $commentRepository->findAll();

        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('admin/index.html.twig', [
            'articles' => $articles,
            'comments' => $comments,
            'users' => $users
        ]);
    }
}
