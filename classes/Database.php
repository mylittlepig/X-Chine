<?php 
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


//opration sur la base
$dbh = Database::connect();
var_dump($dbh);
// Utilisateur::insererUtilisateur('sunquan','SUN','Sun','Quan','2005','1980-03-27','quan.sun@polytechnique.edu','modal.css');

$dbh = NULL;
?>