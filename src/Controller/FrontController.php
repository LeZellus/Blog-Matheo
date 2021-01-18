<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    public function home()
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
	 * Function to register member with validation
	 */
	public function register($post)
	{
		if ($post->get('submit')) {

			$errors = $this->validation->validate($post, 'User');

			if (!$errors) {
				$this->userDAO->register($post);
				$this->session->set('register', 'Votre inscription a bien été effectuée');
				header('Location: /index.php');
			}
			return  $this->view->render('register', [
				'post' => $post,
				'errors' => $errors
			]);
		}
		return $this->view->render('register');
        $articles = $this->articleDAO->getLastArticles();

        ob_start();
        include __DIR__ . '/../../templates/home.php';

        return new Response(ob_get_clean());
	}

	/**
	 * Function to login
	 */
	public function login($post)
	{
		if ($post->get('submit')) {
			$result = $this->userDAO->login($post);

			if ($result && $result['isPasswordValid']) {
				$this->session->set('login', 'Content de vous revoir');
				$this->session->set('id', $result['result']['id']);
				$this->session->set('pseudo', $post->get('pseudo'));
				$this->session->set('role', $result['result']['name']);
				header('Location: /index.php');
			} else {
				$this->session->set('error_login', 'Le pseudo ou le mot de passe sont incorrects');
				return $this->view->render('login', [
					'post' => $post
				]);
			}
		}
		return $this->view->render('login');
	}

	/**
	 * Function to display article by id
	 */
	public function article($articleId)
	{
		$article = $this->articleDAO->getArticle($articleId);
		$comments = $this->commentDAO->getCommentsFromArticle($articleId);
		return $this->view->render('single', [
			'article' => $article,
			'comments' => $comments
		]);
	}

	/**
	 * Function to return and display all articles on page blog
	 */
	public function blog()
	{
		$articles = $this->articleDAO->getArticles();
		return $this->view->render('blog', [
			'articles' => $articles
		]);
	}

	/**
	 * Function to add comment by article ID
	 */
	public function addComment($post, $articleId)
	{
		if ($post->get('submit')) {
			$errors = $this->validation->validate($post, 'Comment');
			if (!$errors) {
				$this->commentDAO->addComment($post, $articleId);
				$this->session->set('add_comment', 'Le nouveau commentaire a bien été ajouté');
				header('Location: /index.php?route=article&articleId=' . $articleId);
			}
			$article = $this->articleDAO->getArticle($articleId);
			$comments = $this->commentDAO->getCommentsFromArticle($articleId);
			return $this->view->render('single', [
				'article' => $article,
				'comments' => $comments,
				'post' => $post,
				'errors' => $errors
			]);
		}
	}
}