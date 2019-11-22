<?php

require_once 'conn.cfg.php';
try {
//Connexion à la base de données
    $connexion = new PDO($dsn, $user, $mdp, $att);

    if (empty($_POST['libelle']) || empty($_POST['longitude']) || empty($_POST['latitude'])) {
        ?>
        <script type="text/javascript">
            alert("Les champs du formulaire d'ajout d'une randonnée sont obligatoires, veuillez les remplir !");
            showModalDialog("../ajoutRando.php");
        </script>
        <?php

    } else {
        $sql = ("INSERT INTO etapes(longitude, latitude, libelle)VALUES('" . $_POST['longitude'] . "')");
        $ajout = $connexion->exec($sql);
        ?>
        <script type="text/javascript">
            alert("Randonnée ajoutée !");
            showModalDialog("../ajoutRando.php");
        </script>
        <?php

    }
} catch (PDOException $e) {
    die($dsn . "erreur : " . $e->getMessage());
}
?>