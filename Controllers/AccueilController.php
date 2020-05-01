<?php

namespace App\Controllers;

class AccueilController
{
  public $test;
  public function __construct()
  {

    if (isset($_POST['send'])) {
     $test =  $this->sendMail();
      
    } 
    new View('Views/viewAccueil.php', array(
      'test' => $this->test
    ));
  }

  public function sendMail()
  {
    $success = true;
    $name =filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS);
    $content = filter_var($_POST['content'], FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($name)) {
      $success = false;
    }
    if (empty($firstname)) {
      $success = false;
    }
    if (empty($email)) {
      $success = false;
    }
    if (empty($content)) {
      $success = false;
    }
    if ($success == true) {
      $header = 'De :' . $name . ' ' . $firstname . $email;
      mail('eliott.geoffroy@gmail.com', 'Un message de votre blog', $content, $header);
      $name = $firstname = $email = $content = '';
      $this->test = 'Envoyé';
      header('Location:' . ROOT_DIR . 'accueil');
    } else {
      return $this->test = 'Refusé';
    }
  }
}
