<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Récupérez les données du formulaire
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Envoyez l' email
  $sujet = 'Nouveau message de contact';
  $message = "Nom : $name\nEmail : $email\nMessage : $message";
  mail('commercial@casano-agency.com', $sujet, $message);

  echo '<p>Votre message a été envoyé.</p>';
}
?>
