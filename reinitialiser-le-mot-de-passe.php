<?php
// Ceci est générique. Il s'agit de se connecter à la base de données
include('config.php');
 
// Variable utilisé pour afficher une notification d'erreur ou de succès
$msg = '';
 
if (empty($_GET['token'])) {	// Si aucun token n'est spécifié en paramètre de l'URL
	echo 'Aucun token n\'a été spécifié';
	exit;
}
 $token = $_GET['token'];
// On récupère les informations par rapport au token dans la base de données
$req = mysqli_query($db,"SELECT * FROM main WHERE password_recovery_token='$token'");
$row = mysqli_fetch_array($req,MYSQLI_ASSOC);

 
if (empty($row)) {	// Si aucune info associée au token n'est trouvé
	echo 'Ce token n\'a pas été trouvé';
	exit;
}
 
// On calcul la date de la génération du token + 3hrs
$tokenDate = strtotime('+3 hours', strtotime($row['password_recovery_asked_date']));
$todayDate = time();
 
if ($tokenDate < $todayDate) {	// Si la date est dépassé le délais de 3hrs
	echo 'Token expiré !';
	exit;
}
 
if (!empty($_POST)) {	// Si le formulaire a été soumis
	if (!empty($_POST['password']) && !empty($_POST['password_confirm'])) {	// Si le formulaire est correctement remplit
		echo 'salut'.strtotime("+5 hours");
		echo $_POST['password_confirm'];
		if ($_POST['password'] === $_POST['password_confirm']) {	// Si les deux mots de passes sont les mêmes
			// On hash le mot de passe
			echo 'salut';
			$password = $_POST['password'];
			$token=$_GET['token'];
			// On modifie les informations dans la base de données
			$query = mysqli_query($db,"UPDATE main SET password = '$password', password_recovery_token = '' WHERE password_recovery_token = '$token'");
			//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);

			//$query = $db->prepare('UPDATE main SET password = ?, password_recovery_token = "" //WHERE password_recovery_token = ?');
			//$query->execute( $password,);
 
			$msg = '<div style="color: green;">Le mot de passe a été changé !</div>';
		} else {	// si les deux mots de passe ne sont pas identiques
			$msg = '<div style="color: red;">Les deux mots de passes ne sont pas identiques.</div>';
		}
	} else {
		$msg = '<div style="color: red;">Veuillez remplir tous les champs du formulaire.</div>';
	}
}
?>
<h1>Réinitialiser le mot de passe</h1>
 
<?php echo $msg; ?>
 
<form action="reinitialiser-le-mot-de-passe.php?token=<?php echo $_GET['token']; ?>" method="post">
	<label>Mot de passe : <input type="password" name="password" value="" /></label><br />
	<label>Confirmation du mot de passe : <input type="password" name="password_confirm" value="" /></label><br />
	<button type="submit">Changer le mot de passe</button>
</form>