<?php
if( isset($_POST['envoi']))
{
 //récupérer les données du formulaire en utilisant la valeur des attributs name comme clé 
 
	$ine=$_POST['ine_name'];
	$nom=$_POST['nom_name'];
	$prenom=$_POST['prenom_name'];
	$mail=$_POST['email_name'];
	$tel=$_POST['tel_name'];

	echo 'Affichage des valeurs saisies dans le formulaire';
	echo '<br> ine :'  . $ine . '<br> nom : '  . $nom . '<br> prenom : '  . $prenom . '<br> email : ' .$mail. '<br> telephone : '.$tel;

//On établit la connexion avec le serveur et la base de données

	$nom_serveur = "localhost";
	$utilisateur = "root";
	$nom_base_données = "unchk_etude"
$link = mysqli_connect("localhost","root","","unchk_etude") or
die("Impossible de se connecter:" .mysqli_error());
echo '<br> Etat: Connexion au serveur et à la base de données reussies';

//requete insertion dans la base
$sql=" INSERT INTO etudiant ('ine', 'nom', 'prenom', 'email', 'telephone')
VALUES ('$ine','$nom','$prenom','$mail','$tel') ";

if (!mysqli_query($link,$sql)) 
{
	die("Impossible d'ajouter cet enregistrement:" .mysqli_error());
}
echo  "<br> L'enregistrement est ajouté";
echo'<br>';

    // requete affichage données de la base

  $res1="SELECT * FROM etudiant";

  $res = mysqli_query($link,$res1);
$row=mysqli_fetch_row($res);
echo " Vous venez d'enregistrer l'etudiant:";
echo "&nbsp;".$row[0]; // l'INE
echo "&nbsp;".$row[1]; // le NOM
echo "&nbsp;".$row[2];
echo "&nbsp;".$row[3];
echo "&nbsp;".$row[4];

//requete affichage toutes les enreistrements 
$result = mysqli_query($link,"SELECT * FROM etudiant ");

echo " <br> Et voici la liste des étudiants :";

echo "<table border='1'>
<tr>
<th>INE</th>
<th>NOM</th>
<th>PRENOM</th>
<th>EMAIL</th>
<th>TELEPHONE</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['ine'] . "</td>";
echo "<td>" . $row['nom'] . "</td>";
echo "<td>" . $row['prenom'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['telephone'] . "</td>";

echo "</tr>";
}
echo "</table>";

// fermeture de la connexion
mysqli_close($link);

}
?>