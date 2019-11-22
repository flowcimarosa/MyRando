<?php
session_start();
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
        <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-noscript.css" />
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
    </head>
    <body class="contact loading">
        <?php
        include_once 'inc/menu1.inc.php';
        ?>
        <!-- Main -->
        <article id="main">
            <header class="special container">
                <span class="icon fa-plus"></span>
                <h2>Ajouter les nouvelles randonnées</h2>
            </header>
            <!-- One -->
            <section class="wrapper style4 special container small">
                <!-- Content -->
                <div class="content">
                    <form id="ajoutRando" action="inc/ajoutRando.inc.php" method="POST">
                        <div class="row half">
                            <div class="6u">
                                <label>Les secteurs :</label>
                                <select name="rando">
                                    <?php
                                    try {
                                        $gs = $connexion->prepare('SELECT * FROM randonnee');
                                        $gs->execute();
                                        while ($row = $gs->fetch()) {
                                            print_r($row);
                                            ?> <option class='submenu opener' value="<?php echo $row["nomRando"]; ?>"><?php echo $row["nomRando"]; ?></option><?php }
                                        ?><option value="vide" selected="selected"></option><?php
                                    } catch (PDOException $e) {
                                        echo 'ERROR: ' . $e->getMessage();
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class='6u'>
                                <label>Difficulté :</label>
                                <select name="etapes">
                                    <?php
                                    try {
                                        $gd = $connexion->prepare('SELECT * FROM etapes');
                                        $gd->execute();
                                        while ($row = $gd->fetch()) {
                                            print_r($row);
                                            ?>  <option value="<?php echo $row["libelle"]; ?>"><?php echo $row["libelle"]; ?></option><?php
                                        }
                                        ?>
                                        <option value="vide" selected="selected"></option><?php
                                    } catch (PDOException $e) {
                                        echo 'ERROR: ' . $e->getMessage();
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="12u">
                                <ul class="buttons">
                                    <li><input type="submit" class="button special" value="ajouter" name="ajouter"/></li>
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