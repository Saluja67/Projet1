<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>formulaire reservation</title>
	</head>
<body>

<?php 

//Récupération des valeurs saisies dans le formulaire

$Date = $_POST['idDate'];
$Heure = $_POST['heure'];
$Personne = $_POST['perso'];
$Nom = $_POST['nom'];
$Prenom = $_POST['prenom'];
$Email = $_POST['email'];
$Telephone = $_POST['telephone'];
$Message = $_POST['message'];

// Connexion à la base de données
include('reservation.sql');

//Requête de création de la table 'produit'
$requete = "INSERT INTO reservation (idDate, heure, perso, nom, prenom, email, telephone, message)
			VALUES ('$Date','$Heure', '$Personne', '$Nom', '$Prenom','$Email','$Telephone','$Message',);";

//Envoi de la requête à la base de données
			$resultat = mysqli_query($connexion,$requete);
//Si la requête est exécutée, la fonction retourne la valeur "true"
//Si la requête n'est pas exécutée, la fonction retourne la valeur "false"

//Test si la requête a bien été exécutée
if($resultat==true)
{
echo 'La réservation à bien été prise en compte.';
}
else
{
echo 'Un problème est survenu lors de l\'insertion des données !<br />'.mysqli_error();
}

 ?>


<p>Pour revenir en arrire, <a href="reservation.html">cliquez ici</a></p>
</body>
</html>