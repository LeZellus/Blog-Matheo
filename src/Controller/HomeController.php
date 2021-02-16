<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class HomeController extends AbstractController
{
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()) {

            $contactFormData = $form->getData();

            $message = (new Email())
                ->from($contactFormData['email'])
                ->to('matheo.zeller@gmail.com')
                ->subject('Vous avez reçu un mail d\'un visiteur du blog')
                ->text('Destinataire : '.$contactFormData['email'].\PHP_EOL.
                    $contactFormData['message'],
                    'text/plain');

            $mailer->send($message);

            $this->addFlash('success', 'Your message has been sent');

            return $this->redirectToRoute('app_home');
        }

        $articles = $this->getDoctrine()->getRepository(Article::class)->findBy(
            ['isPublished' => true],
            ['publishedAt' => 'desc']
        );

        return $this->render('home/index.html.twig', [
            'articles' => $articles,
            'form' => $form->createView()
        ]);
    }
}
