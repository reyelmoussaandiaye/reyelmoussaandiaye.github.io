<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unchk_etude";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
if (isset($_POST['submit'])) {
	$ine = $_POST['ine'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];

$query = "INSERT INTO 'unchk_etude'
 VALUES('', '$ine', '$nom', '$prenom', '$email', '$tel',)";
mysql_query($conn,$query);
echo 
"
<script> alert ('Data Inserted Successfully'); <script/>
";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>formulaire Etudiants N°1</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="Etudiant.css">

</head>
<body>
    <h1>Enregistrement Etudiants</h1>
    <form action="connexion.php" method="POST">
    
    <div>
        <label for="name" class="italique">INE :</label>
        <input type="text" id="ine" name="ine_name"/><br><br>
    </div>
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="nom" name="nom_name"/><br><br>
    </div>
    <div>
        <label for="name">Prénom :</label>
        <input type="text" id="prenom" name="prenom_name"/><br><br>
    </div>
    <div>
        <label for="mail">e-mail:</label>
        <input type="email" id="mail" name="mail_name"/><br><br>
    </div>
    <div>
        <label for="name">Téléphone :</label>
        <input type="tel" id="tel" name="tel_name"/><br><br>
    </div>


    <div class="dalal">
         <input type="submit" value="submit" name="envoi" /><br><br>
    </div>       
   </form>
</body>
</html>