<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ErrorController extends AbstractController
{
	/**
	 * Function to return error not found
	 */
	public function errorNotFound()
	{
		return $this->view->render('error_404');
	}

	/**
	 * Function to return error server
	 */
	public function errorServer()
	{
		return $this->view->render('error_500');
	}
}
