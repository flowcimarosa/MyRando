<?php
require_once 'conn.cfg.php';
try {
    $req = "Select * from utilisateur";
    $jeu = $connexion->query($req);
//Parcours du jeu d'enregistrement :
//On extrait chaque ligne dans un tableau associatif nommé ici $row
    while ($row = $jeu->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tbody><tr><td><?php echo $row["pseudo"]; ?></td>
                <td><?php echo $row["nom"]; ?></td>
                <td><?php echo $row["prenom"]; ?></td>
                <td><?php echo $row["status"]; ?></td>
                <td><?php echo $row["mail"]; ?></td>
                <td><a class='icon fa-stack-overflow' href='modify.php?id=<?php echo $row["id"]; ?>' ></a></td>
                <td><a class='icon fa-times' href='inc/delete.inc.php?id=<?php echo $row["id"]; ?>' ></a></td></tr></tbody><?php
    }
} catch (PDOException $e) {
    die($dsn . "erreur : " . $e->getMessage());
}
?>