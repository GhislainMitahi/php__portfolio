<?php
// Ceci est générique. Il s'agit de se connecter à la base de données
include('config.php');
// Variable utilisé pour afficher une notification d'erreur ou de succès
$msg = '';
 
if (!empty($_POST)) {	// Si le formulaire a été soumis
	if (!empty($_POST['email'])) {	// Si le formulaire est correctement remplit

		// On fait une requête pour savoir si l'adresse e-mail est associé à un compte
		// $query = $db->prepare('SELECT * FROM main WHERE mail = ?');
		// $query->execute([$_POST['email']]);
		// $row = $query->fetch(PDO::FETCH_ASSOC);
		$mail= $_POST['email'];
		$req = "SELECT id FROM main WHERE mail = '$mail'";
$query = $db->query($req);
$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
 
		if (!empty($row)) {	// Si l'adresse courriel est associé à un compte
			// On génère notre token
			$string = implode('', array_merge(range('A','Z'), range('a','z'), range('0','9')));
			$token = substr(str_shuffle($string), 0, 20);
 			
			// On insère la date et le token dans la DB


			$req = mysqli_query($db,"UPDATE main SET password_recovery_asked_date = NOW(), password_recovery_token = '$token' WHERE mail = '$mail'");
	
			
			//$row = mysqli_fetch_array($req,MYSQLI_ASSOC);
			//echo $row['password_recovery_token'];
			/*$req = "UPDATE main SET password_recovery_asked_date = NOW(), password_recovery_token = $token WHERE email = $mail";
			$query = $db->query($req);*/
	
			
		// 	$req = $db->prepare("INSERT INTO main (password_recovery_asked_date = NOW(), password_recovery_token) VALUE(?) WHERE email = $mail");
		// 	$update= $db->query($token);

		// 	$req = $db->prepare('INSERT INTO main (name,password,text,image,domaine,niveau,mail,github,linkedin) VALUES(?,?,?,?,?,?,?,?,?)');
        //  $req->execute(array($_POST['fullname'], $_POST['password'], $_POST['text'],$lien,$_POST['domaine'],$_POST['niveau'],$_POST['mail'],$_POST['github'],$_POST['linkedin']));
		
			// On prépare l'envoie du courriel
			$link = "http://localhost/portfolio/reinitialiser-le-mot-de-passe.php?token=".$token;

			$to = $_POST['email'];
			$subject = 'Réinitisalisation de votre mot de passe';
			$message = "Pour réinitialiser votre mot de passe, veuillez suivre ce lien : $link";
		echo $link;
			// On défini les entêtes requis
		///	$headers = [];
		//	$headers[] = 'MIME-Version: 1.0';
		//	$headers[] = 'Content-type: text/html; charset=utf8';
		$headers = 'To: '.$to.' <'.$to.'>';
			//$headers[] = 'Mon site web <ghislain come soon@monsiteweb.tld>';
 
			// On envoie le courriel
			mail($to, $subject, $message,  $headers);
 
			$msg = '<div style="color: green;">Un courriel a été acheminé. Veuillez regarder votre boîte aux lettres et suivre les instructions à l\'intérieur du courriel.</div>';
		} else {	// Si elle n'est pas associé à un compte
			$msg = '<div style="color: red;">Cette adresse courriel n\'a pas été trouvée dans la base de données.</div>';
		}
	} else {	// Si le formulaire n'est pas correctement remplit
		$msg = '<div style="color: red;">Veuillez spécifier une adresse courriel.</div>';
	}
}
?>
<h1>Demander une réinitialisation de mot de passe</h1>
 
<?php echo $msg; ?>
 
<form action="" method="post">
	<label>Votre adresse courriel : <input type="text" name="email"/></label>
	<button type="submit">Envoyer la demande</button>
</form>