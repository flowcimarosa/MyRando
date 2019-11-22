<?php
session_start();

require_once 'inc/conn.cfg.php';
try {
//Connexion à la base de données
    $connexion = new PDO($dsn, $user, $mdp, $att);

    if (empty($_GET['id'])) {
        echo "Erreur";
    } else {
        $sect = $connexion->prepare("SELECT * FROM utilisateur WHERE id= :id");
        $sect->bindParam(':id', $_GET['id']);
        $sect->execute();
        $row = $sect->fetch(PDO::FETCH_BOTH);
    }
} catch (PDOException $e) {
    die($dsn . "erreur : " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MyRando</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.dropotron.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-layers.min.js"></script>
        <script src="js/init.js"></script>
        <script type="text/javascript" src="js/verif_inscription.js"></script>
        <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-noscript.css" />
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
    </head>
    <body class="index loading">
        <?php
        include_once 'inc/menu1.inc.php';
        ?>
        <!-- Main -->
        <article id="main">
            <header class="special container">
                <span class="icon fa-stack-overflow"></span>
                <h2>Modification d'un utilisateur.</h2>
            </header>
            <!--formulaire d'inscription-->                
            <section class="wrapper style4 special container small">
                <div class="content">
                    <form id='modify' action="inc/modify.inc.php?id=<?php echo $row['id']; ?>" method='POST'>
                        <div class="row half no-collapse-1">
                            <div value='<?php echo $row['id']; ?>'></div>
                            <div class="6u">
                                <input id='prenom' type="text" name="prenom" value='<?php echo $row['prenom']; ?>' />
                            </div>
                            <div class="6u">
                                <input id='nom' type="text" name="nom" value='<?php echo $row['nom']; ?>' />
                            </div>
                        </div>
                        <div class="row half">
                            <div class="12u">
                                <input id='pseudo' type="text" name="pseudo" value='<?php echo $row['pseudo']; ?>' />
                            </div>
                        </div>
                        <div class="row half">
                            <div class="6u">
                                <input type="text" name="adresse" value='<?php echo $row['adresse']; ?>' />
                            </div>
                            <div class="6u">
                                <input type="text" name="cp" value='<?php echo $row['codepostal']; ?>' />
                            </div>
                        </div>
                        <div class="row half">
                            <div class="6u">
                                <input type="text" name="ville" value='<?php echo $row['ville']; ?>' />
                            </div>
                            <div class="6u">
                                <input type="text" name="tel" value='<?php echo $row['tel']; ?>' />
                            </div>
                        </div>
                        <div class="row half">
                            <div class="12u">
                                <input id='mail' type="text" name="mail" value='<?php echo $row['mail']; ?>' />
                            </div>
                        </div>
                        <div class="row">
                            <div class="12u">
                                <ul class="buttons">
                                    <li><input type="submit" class="button special" value="Modifier" name="modify"/></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </article>
        <?php
        include_once 'inc/footer.inc.php';
        ?>
    </body>
</html>
