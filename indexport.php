<?php 
include("session2.php");
$req = mysqli_query($db,"select name,text, image,domaine,niveau,mail,github,linkedin from main where id=$the_view");
$rep = mysqli_fetch_array($req,MYSQLI_ASSOC);
$image = $rep["image"];
$mailAdress= $rep['mail'];

if(isset($_POST['sendmail'])){

$dest = $mailAdress;
  $sujet = $_POST['name']. " Email de test depuis potfolio";
  $corp = $_POST['message'];
  $mail=$_POST['mailAdress'];
  $headers = "From:$mail";

  if (mail($dest, $sujet, $corp, $headers)) {
    echo "Email envoyé avec succès à $dest ";
  } else {
    echo "Échec de l'envoi de l'email...";
  }
}
?>