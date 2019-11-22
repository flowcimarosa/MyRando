<?php

require_once 'conn.cfg.php';
try {
    //Connexion à la base de données
    $connexion = new PDO($dsn, $user, $mdp, $att);
    $diff = $_POST['difficult'];
    $desc = $_POST['descDifficult'];
    if (empty($diff) || empty($desc)) {
        ?>
        <script type="text/javascript">
            alert("Veuillez remplir tout les champs pour ajouter une difficulté.");
            showModalDialog("../ajoutDifficult.php");
        </script>
        <?php
    } else {
        $sql = $connexion->prepare("INSERT INTO difficulte (libelleDiff, descriptifDiff)VALUES('$diff', '$desc')");
        $sql->execute();
        if ($row = $sql->rowCount() > 0) {
            ?>
            <script type="text/javascript">
                alert("La nouvelle difficulté a bien été enregistré.");
                showModalDialog("../listDifficult.php");
            </script>
            <?php

        }
    }
} catch (PDOException $e) {
    die($dsn . "erreur : " . $e->getMessage());
}
?>