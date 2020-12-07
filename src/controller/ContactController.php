<?php

namespace App\src\controller;

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
  public function contact($post)
  {
    $articles = $this->articleDAO->getLastArticles();

    if ($post->get('submit')) {

      $errors = $this->validation->validate($post, 'Contact');

      if (!$errors) {

        $mail = new PHPMailer(true);
        $EmailReceive = "matheo.zeller@gmail.com";
        $EmailSend = "xipelgame@gmail.com";

        $fromName = $post->get('name');
        $fromEmail = $post->get('email');
        $message = $post->get('message');
        $subject = "Un visiteur du blog vous contacte";

        try {
          //Server settings
          // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
          $mail->isSMTP();                                            // Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
          $mail->Username   = $EmailSend;                     // SMTP username
          $mail->Password   = 'PlayGmail12$g';                               // SMTP password
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
          $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

          //Recipients
          $mail->setFrom($fromEmail, $fromName);
          $mail->addAddress($EmailReceive, 'Matheo Zeller');     // Add a recipient
          $mail->addReplyTo($fromEmail, 'First Last');
          // Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = $subject;
          $mail->Body    = $message;
          $mail->AltBody = $message;

          $mail->send();
          $this->session->set('contact', 'Votre message a bien été envoyé');
          var_dump($_SESSION);
          header('Location: /index.php');
        } catch (Exception $e) {
          // echo "Le message n'a pu être envoyé. Mailer Error: {$mail->ErrorInfo}";
          $this->session->set('contact', 'Un problème est survenu');
        }
      }

      return  $this->view->render('home', [
        'post' => $post,
        'errors' => $errors,
        'articles' => $articles
      ]);
    }

    return $this->view->render('home', [
      'articles' => $articles
    ]);
  }
}
