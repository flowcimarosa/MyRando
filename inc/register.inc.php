<?php

require_once 'conn.cfg.php';
include('../php/encrypt.php');

try {
    $connexion = new PDO($dsn, $user, $mdp, $att);
} catch (PDOException $e) {
    die($dsn . "erreur : " . $e->getMessage());
}

if (($_POST['pass']) == ($_POST['pass2'])) {
    HashPwd($_POST['pass2']);
}
if (empty($_POST['pseudo']) || empty($_POST['mail']) || empty($_POST['mail2']) || empty($_POST['pass']) || empty($_POST['pass2'])) {
    ?>
    <script type="text/javascript">
        alert("Les champs du formulaire d'inscription sont obligatoires ! \n Veuillez les remplir !");
        showModalDialog("../connexion.php#inscription");
    </script>
    <?php

} else {
    $sql_i = $connexion->prepare("INSERT INTO utilisateur (pseudo, nom, prenom, status, pass, adresse, codepostal, ville, tel, mail)VALUES('$_POST[pseudo]','$_POST[nom]','$_POST[prenom]','user', :hash,'$_POST[adresse]','$_POST[cp]','$_POST[ville]','$_POST[tel]','$_POST[mail2]')");
    $sql_i->bindParam(':hash', $hash);
    $sql_i->execute();
}
if ($sql_i->rowCount() >= 1) {
    ?>
    <script type="text/javascript">
        alert("Bienvenue, vous êtes maintenant inscrit !");
        showModalDialog("../connexion.php");
    </script>
    <?php
}
?>