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
                        <div class="row half no-collapse-1">
                            <div class="12u">
                                <input type="text" name="nomRando" placeholder="Nom de la randonnée" />
                            </div>
                        </div>
                        <div class="row half">
                            <div class="12u">
                                <textarea name="descRando" placeholder="Description de la randonnée" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="row half no-collapse-1">
                            <div class="6u">
                                <input type="text" name="itineraire" placeholder="Itinéraire de la randonnée" />
                            </div>
                            <div class="6u">
                                <input type="text" name="duree" placeholder="Durée de la randonnée" />
                            </div>
                        </div>
                        <div class="row half no-collapse-1">
                            <div class="12u">
                                <input type="text" name="periode" placeholder="Période de la randonnée" />
                            </div>
                        </div>
                        <div class="row half no-collapse-1">
                            <div class="6u">
                                <input type="text" name="denivele" placeholder="Dénivelé de la randonnée" />
                            </div>
                            <div class="6u">
                                <input type="text" name="carteIgn" placeholder="Carte IGN de la randonnée" />
                            </div>
                        </div>
                        <div class="row half">
                            <div class="6u">
                                <label>Les secteurs :</label>
                                <select name="secteur">
                                    <?php
                                    try {
                                        $gs = $connexion->prepare('SELECT * FROM secteur');
                                        $gs->execute();
                                        while ($row = $gs->fetch()) {
                                            print_r($row);
                                            ?> <option class='submenu opener' value="<?php echo $row["libelleSect"]; ?>"><?php echo $row["libelleSect"]; ?></option><?php }
                                        ?><option value="vide" selected="selected"></option><?php
                                    } catch (PDOException $e) {
                                        echo 'ERROR: ' . $e->getMessage();
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class='6u'>
                                <label>Difficulté :</label>
                                <select name="difficulte">
                                    <?php
                                    try {
                                        $gd = $connexion->prepare('SELECT * FROM difficulte');
                                        $gd->execute();
                                        while ($row = $gd->fetch()) {
                                            print_r($row);
                                            ?>  <option value="<?php echo $row["libelleDiff"]; ?>"><?php echo $row["libelleDiff"]; ?></option><?php
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