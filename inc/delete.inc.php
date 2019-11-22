<?php

require_once 'conn.cfg.php';
try {
    //Connexion à la base de données
    $connexion = new PDO($dsn, $user, $mdp, $att);

    if (empty($_GET['id'])) {
        echo "Erreur";
    } else {
        $supp = $connexion->prepare("DELETE FROM utilisateur WHERE id= :id");
        $supp->bindParam(':id', $_GET['id']);
        $supp->execute();
    }
    if ($supp->rowCount() > 0) {
        ?>
        <script type="text/javascript">
            alert("Utilisateur supprimer !");
            showModalDialog("../admin.php");
        </script>
        <?php
    }
} catch (PDOException $e) {
    die($dsn . "erreur : " . $e->getMessage());
}
?>