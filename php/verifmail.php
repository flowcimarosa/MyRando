<?php
require_once ('../inc/conn.cfg.php');
try {
        $connexion = new PDO($dsn, $user, $mdp, $att);
	$sql = $connexion->prepare("SELECT * FROM utilisateur WHERE mail='".$_GET["email"]."'");
	$sql->execute();
	
	if($sql->rowCount()>=1) {
		echo "1";
	}
	else{
		echo "2";
	}
}
catch(PDOException $e) {
	echo 'ERROR: ' . $e->getMessage();
}

?>