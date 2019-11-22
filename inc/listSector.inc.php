<?php
require_once 'conn.cfg.php';
try {
    $req = "Select libelleSect from secteur";
    $jeu = $connexion->query($req);
//Parcours du jeu d'enregistrement :
//On extrait chaque ligne dans un tableau associatif nommé ici $row
    while ($row = $jeu->fetch(PDO::FETCH_ASSOC)) {
        echo $row["libelleSect"] . "<br />";
    }
} catch (PDOException $e) {
    die($dsn . "erreur : " . $e->getMessage());
}
?>