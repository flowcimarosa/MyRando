<?php
require_once 'conn.cfg.php';
try {
    $req = "Select libelleDiff, descriptifDiff from difficulte";
    $jeu = $connexion->query($req);
//Parcours du jeu d'enregistrement :
//On extrait chaque ligne dans un tableau associatif nommé ici $row
    while ($row = $jeu->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tbody><tr><td><?php echo $row["libelleDiff"]; ?></td>
                <td><?php echo $row["descriptifDiff"]; ?></td></tr></tbody><?php
    }
} catch (PDOException $e) {
    die($dsn . "erreur : " . $e->getMessage());
}
?>