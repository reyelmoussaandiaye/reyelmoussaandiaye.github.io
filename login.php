<?php
// login.php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// code..
	$username =$_POST['username'];
	$password = $_POST['password'];
	//verification des informations dans la base de données 
	//si les informations sont valide, rediriger vers l'espace approprié
	if ($username===$valid_username && $password===$valid_password) {
	 	$_SESSION['username'] = $username;
	 	//Redirection vers l'espace etudiant ou administrateur
	 // header("location: espace_etudiant.php")
	 	
	 	header("location:espace_admin.php");
	 	exit;
	 } else{
	 	//si les informations sont incorrectes, afficher un message d'erreur
	 	echo "identifiant ou mot de passe incorrect.";
	 }
}
?>