<?php
require_once 'conn.cfg.php';

try {
    if (isset($_POST['connexion'])) {
        if (!empty($_POST['mypseudo']) && !empty($_POST['mypass'])) {
            $login = $_POST['mypseudo'];
            $query = mysql_query("SELECT * FROM `utilisateur` where `pseudo`='" . $login . "'");
            if (isset($_POST['mypseudo'])) {
                $login = $_POST['mypseudo'];
                $_SESSION['username'] = $login;
                $connexion = new PDO('mysql:host=sql2.olympe.in;dbname=1wlyp50x', '1wlyp50x', 'root');
                $sql = "SELECT * FROM utilisateur WHERE pseudo= :pseudo";
                $smth = $connexion->prepare($sql);
                $smth->bindParam(':pseudo', $_SESSION['username']);
                $smth->execute();
                if ($smth->rowCount() >= 1) {
                    $row = $smth->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['status'] = $row['status'];
                    $_SESSION['username'] = $row['pseudo'];
                    $_SESSION['mail'] = $row['mail'];
                    $pass = $_POST['mypass'];
                    $pass1 = $row['pass'];

                    if (crypt($pass, $pass1) == $pass1) {
                        $_SESSION['login'] = 1;
                        echo "<script type='text/javascript'>document.location.replace('index.php');</script>"; // redirects
                    } else {
                        ?>
                        <script type="text/javascript">
                            alert("Le mot de passe est incorrect !");
                        </script>
                        <?php

                    }
                } else {
                    ?>
                    <script type="text/javascript">
                        alert("Ce nom d'utilisateur n'existe pas !");
                    </script>
                    <?php

                }
            }
        } else {
            ?>
            <script type="text/javascript">
                alert("Vous devez remplir tous les champs !");
            </script>
            <?php
        }
    }
} catch (PDOException $e) {
    die('mysql:host=localhost;dbname=myrandodb' . "erreur : " . $e->getMessage());
}
?>
