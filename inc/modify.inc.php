<?php

require_once 'conn.cfg.php';
try {
    $cnx = new PDO($dsn, $user, $mdp);
    $id = $_GET['id'];
    $log = $_POST['pseudo'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $cp = $_POST['cp'];
    $ville = $_POST['ville'];
    $tel = $_POST['tel'];
    $mail = $_POST['mail'];

    $req = "UPDATE utilisateur SET pseudo='$log' , nom='$nom' , prenom='$prenom' , adresse='$adresse' , codepostal='$cp', ville='$ville', tel='$tel', mail='$mail'  WHERE id='$id' ";
    $ajout = $cnx->exec($req);
    ?>
    <script type="text/javascript">
        alert("Vous avez modifier un randonneur !");
        showModalDialog("../admin.php");
    </script>
    <?php
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>
