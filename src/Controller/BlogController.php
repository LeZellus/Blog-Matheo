<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Form\ArticleType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{
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

    public function add(Request $request): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $article->setUpdatedAt(new \DateTime());

            if ($article->getThumb() !== null) {
                $file = $form->get('thumb')->getData();
                $fileName =  uniqid(). '.' .$file->guessExtension();

                try {
                    $file->move(
                        $this->getParameter('images_directory'), // Le dossier dans le quel le fichier va etre charger
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

            $em = $this->getDoctrine()->getManager(); // On récupère l'entity manager
            $em->persist($article); // On confie notre entité à l'entity manager (on persist l'entité)
            $em->flush(); // On execute la requete

            return new Response('L\'article a bien été enregistrer.');
        }

        return $this->render('blog/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

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
                $fileName = uniqid(). '.' .$file->guessExtension();

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

            return new Response('L\'article a bien été modifier.');
        }

        return $this->render('blog/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView()
        ]);
    }

    public function show(Article $article): Response
    {
        $comments = $this->getDoctrine()->getRepository(Comment::class);
        return $this->render('blog/show.html.twig', [
            'article' => $article,
            'comments' => $comments
        ]);
    }

    public function remove(Article $article): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();

        return $this->redirectToRoute('admin');
    }

    public function admin(): Response
    {
        $articles = $this->getDoctrine()->getRepository(Article::class)->findBy(
            [],
            ['updatedAt' => 'DESC']
        );

        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('admin/index.html.twig', [
            'articles' => $articles,
            'users' => $users
        ]);
    }
}
