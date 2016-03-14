<?php
class Utilisateur {
	public $login;
	public $mdp;
	public $nom;
	public $prenom;
	public $promotion;
	public $email;
	public $presentation;
// 	public $photo;
	public function __toString() {
		return '['.$this->login.']'.' '.$this->prenom." ".$this->nom." ".$this->promotion." ".$this->email;
	}
	
	public static function getUtilisateurFromLogin($login){
		$dbh = Database::connect();
		$query = "SELECT * FROM `utilisateurs`";
		$sth = $dbh->prepare($query);
		$sth->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
		$request_succeeded = $sth->execute();
		while($courant = $sth->fetch()){
			if($courant->login == $login){
				$sth ->closeCursor();
				$dbh=NULL;
				return $courant;
			}
		}
		return NULL;
	}
	public static function getUtilisateurFromEmail($email){
		$dbh = Database::connect();
		$query = "SELECT * FROM `utilisateurs`";
		$sth = $dbh->prepare($query);
		$sth->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
		$request_succeeded = $sth->execute();
		while($courant = $sth->fetch()){
			if($courant->email == $email){
				$sth ->closeCursor();
				$dbh=NULL;
				return $courant;
			}
		}
		return NULL;
	}
	public static function insererUtilisateur($login, $mdp, $nom, $prenom, $promotion, $email, $presentation) {
		$dbh = Database::connect();
// 		var_dump($dbh);
		$sth = $dbh -> prepare("INSERT INTO `utilisateurs` (`login`, `mdp`, `nom`, `prenom`, `promotion`, `email`, `presentation`)
				VALUES(?,SHA1(?),?,?,?,?,?)");
		try{
			$sth -> execute(array($login, $mdp, $nom, $prenom, $promotion, $email, $presentation));
			return TRUE;
		}catch (Exception $e){
			echo 'Exception reçue : ',  $e->getMessage(), "\n";
			return FALSE;
		}
		$dbh=NULL;
	}
	public static function testerMdp($user,$mdp){
		if(SHA1($mdp) == $user->mdp){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}

// }
// echo realpath (dirname(__FILE__));
require('Database.php');
// $dbh=Database::connect();
// var_dump($dbh);
// Utilisateur::insererUtilisateur('sunquan', 'sun', 'sun', 'quan','2014', 'quan.sun@polytechnique', 'I am a student');
?>