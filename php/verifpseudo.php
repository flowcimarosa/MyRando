<?php
include('../inc/conn.cfg.php');
try {
        $connexion = new PDO('mysql:host=localhost;dbname=myrandodb', 'root', 'root');
	$sql = $connexion->prepare("SELECT * FROM utilisateur WHERE pseudo='".$_GET["pseudo"]."'");
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