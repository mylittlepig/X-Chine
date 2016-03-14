<?php
require('classes/Utilisateur.php');
if(isset($_POST["login"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"])
		&& isset($_POST["promotion"]) && isset($_POST["mdp"]) && isset($_POST["mdp2"])){
	if(Utilisateur::getUtilisateurFromLogin($_POST["login"]) != NULL){
		echo $_POST["login"]."exsite, utilise d'ature login, retour vers la page d'inscription. ";
		echo '<a href="inscription.php">back</a>';
	}elseif($_POST["mdp"] != $_POST["mdp2"]){
		echo "les deux mots de passe ne sont pas identiques";
		echo '<a href="inscription.php">back</a>';
	}else{
		if(Utilisateur::insererUtilisateur($_POST["login"], $_POST["mdp"], $_POST["nom"], $_POST["prenom"], $_POST["promotion"], $_POST["email"], $_POST["presentation"]))
			echo "inscription avec success, retourner vers la page d'accueil ".'<a href="index.php">back</a>';
		else
			echo "inscription sans success";
	}
}



?>