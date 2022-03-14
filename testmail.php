<?php
// ini_set( 'display_errors', 1);
// error_reporting( E_ALL );
// $from = "test@votredomaine.com";
// $to ="adressedestinataire";
// $subject = "Vérification PHP Mail";
// $message = "PHP mail marche";
// $headers = "From:" . $from;
// mail($to,$subject,$message, $headers);
// echo "L'email a été envoyé.";

// ini_set("SMTP","localhost");
// ini_set("smtp_port","587");

  $dest = "knkjoseph@gmail.com";
  $sujet = "Email de test";
  $corp = "Salut ceci est un email de test envoyer par un script PHP";
  $headers = "From: ghislainmitahi@gmail.com";

  if (mail($dest, $sujet, $corp, $headers)) {
    echo "Email envoyé avec succès à $dest ";
  } else {
    echo "Échec de l'envoi de l'email...";
  }

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>
<label for="name">Fullname</label> <br/>
<input type="text" id="name" name="name">
</p>
<p>
<label for="email">Adresse mail</label><br/>
<input type="mail" id="email" name="mail">
</p>
<p>
<label for="message">message</label><br/>
<input type="text" id="message" name="message">
</p>
    </form>
</body>
</html> -->