<?php

require_once 'conn.cfg.php';
try {
    //Connexion à la base de données
    $connexion = new PDO($dsn, $user, $mdp, $att);
    $secteur = $_POST['ajoutSector'];
    if (empty($secteur)) {
        ?>
        <script type="text/javascript">
            alert("Veuillez remplir le champ pour ajouter un secteur.");
            showModalDialog("../ajoutSector.php");
        </script>
        <?php
    } else {
        $sql = $connexion->prepare("INSERT INTO secteur (libelleSect)VALUES('$secteur')");
        $sql->execute();
        if ($row = $sql->rowCount() > 0) {
            ?>
            <script type="text/javascript">
                alert("Le nouveau secteur a bien été enregistré.");
                showModalDialog("../listSector.php");
            </script>
            <?php

        }
    }
} catch (PDOException $e) {
    die($dsn . "erreur : " . $e->getMessage());
}
?>