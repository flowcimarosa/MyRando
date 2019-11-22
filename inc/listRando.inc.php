<?php
require_once 'conn.cfg.php';
try {
    $req = "Select * from randonnee";
    $jeu = $connexion->query($req);
//Parcours du jeu d'enregistrement :
//On extrait chaque ligne dans un tableau associatif nommé ici $row
    while ($row = $jeu->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tbody><tr><td><?php echo $row["nomRando"]; ?></td>
                <td><?php echo $row["descriptifRando"]; ?></td>
                <td><?php echo $row["itineraire"]; ?></td>
                <td><?php echo $row["duree"]; ?></td>
                <td><?php echo $row["periode"]; ?></td>
                <td><?php echo $row["denivele"]; ?></td>
                <td><?php echo $row["carteIgn"]; ?></td>
                <td><?php echo $row["secteurs"]; ?></td>
                <td><?php echo $row["difficultes"]; ?></td></tr></tbody><?php
    }
} catch (PDOException $e) {
    die($dsn . "erreur : " . $e->getMessage());
}
?>