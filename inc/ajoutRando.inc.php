<?php

require_once 'conn.cfg.php';
try {
//Connexion à la base de données
    $connexion = new PDO($dsn, $user, $mdp, $att);

    if (empty($_POST['nomRando']) || empty($_POST['descRando']) || empty($_POST['itineraire']) || empty($_POST['duree']) || empty($_POST['periode']) || empty($_POST['denivele']) || empty($_POST['carteIgn']) || empty($_POST['secteur']) || empty($_POST['difficulte'])) {
        ?>
        <script type="text/javascript">
            alert("Les champs du formulaire d'ajout d'une randonnée sont obligatoires, veuillez les remplir !");
            showModalDialog("../ajoutRando.php");
        </script>
        <?php

    } else {
        $sql = ("INSERT INTO randonnee(nomRando, descriptifRando, itineraire, duree, periode, denivele, carteIgn, secteurs, difficultes)VALUES('" . $_POST['nomRando'] . "', '" . $_POST['descRando'] . "', '" . $_POST['itineraire'] . "', '" . $_POST['duree'] . "', '" . $_POST['periode'] . "', '" . $_POST['denivele'] . "', '" . $_POST['carteIgn'] . "', '" . $_POST['secteur'] . "', '" . $_POST['difficulte'] . "')");
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