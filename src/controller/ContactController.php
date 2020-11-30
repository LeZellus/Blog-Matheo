<?php

namespace App\src\controller;

use App\config\Parameter;

class ContactController extends Controller
{
  public function contact($post)
  {
    $myEmail = "matheo.zeller@gmail.com";
    $from = $post->get('name');
    $to = $myEmail;
    $subject = "Un visiteur du blog vous contacte";
    $message = $post->get('message');
    $headers = "De :" . $from;
    mail($to, $subject, $message, $headers);

    $articles = $this->articleDAO->getLastArticles();

    return $this->view->render('home', [
      'articles' => $articles
    ]);
  }
}
