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
	public static function insererUtilisateur($dbh, $login, $mdp, $nom, $prenom, $promotion, $email, $presentation) {
// 		$dbh = Database::connect();
		$sth = $dbh -> prepare("INSERT INTO `utilisateurs` (`login`, `mdp`, `nom`, `prenom`, `promotion`, `email`, `presentation`)
				VALUES(?,SHA1(?),?,?,?,?,?,?)");
		try{
			$sth -> execute(array($login, $mdp, $nom, $prenom, $promotion, $email, $presentation));
		}catch (Exception $e){
			echo 'Exception reçue : ',  $e->getMessage(), "\n";
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

class Database{
	public static function connect() {
		$dsn = 'mysql:dbname=X-Chine;host=127.0.0.1';
		$user = 'root';
		$password = '';
		$dbh = null;
		try{
			$dbh = new PDO($dsn, $user, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		}catch (PDOException $e) {
			echo 'Connexion échouée : ' . $e->getMessage();
			exit(0);
		}
		return $dbh;
	}

}

$dbh=Database::connect();
// var_dump($dbh);
Utilisateur::insererUtilisateur($dbh, "sunquan", "sun", "sun", "Quan", "2014", "quan.sun@polytechnique.edu", "I am a student");
?>