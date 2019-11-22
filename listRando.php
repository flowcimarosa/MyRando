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
        <script type="text/javascript" src="js/verif_inscription.js"></script>
        <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-noscript.css" />
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
    </head>
    <body class="left-sidebar loading">
        <?php
        include_once 'inc/menu1.inc.php';
        ?>
        <!-- Main -->
        <article id="main">
            <section>
                <header class="special container">
                    <span class="icon fa-leaf"></span>
                    <h2><b>Liste des randonnées</b></h2>
                    <p>Voici la liste des <strong>randonnées</strong> que vous risquez de rencontrer :<p>
                </header>
            </section>
            <!-- One -->
            <section id="list" class="wrapper style3 container">
                <div class="content">
                    <div>
                        <section>
                            <header>
                                <h3><b>Les randonnées</b> :</h3>
                            </header>
                        </section>
                    </div>
                    </header>
                    <div class="skel-cell-important">
                        <div id="cta">
                            <table>
                                <thead>
                                    <tr>
                                        <td>
                                            <b>Nom</b>
                                        </td>
                                        <td>
                                            <b>Descriptif</b>
                                        </td>
                                        <td>
                                            <b>Itinéraire</b>
                                        </td>
                                        <td>
                                            <b>Durée</b>
                                        </td>
                                        <td>
                                            <b>Période</b>
                                        </td>
                                        <td>
                                            <b>Dénivelé</b>
                                        </td>
                                        <td>
                                            <b>Carte IGN</b>
                                        </td>
                                        <td>
                                            <b>Secteurs</b>
                                        </td>
                                        <td>
                                            <b>Difficultées</b>
                                        </td>
                                    </tr>
                                </thead>
                                <?php include 'inc/listRando.inc.php'; ?>
                            </table>
                            <div class="12u">
                                <ul class="buttons">
                                    <li><a href="connexion.php#inscription" class="button fit scrolly">Ajouter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
        <?php
        include_once 'inc/indexCta.inc.php';
        include_once 'inc/footer.inc.php';
        ?>
    </body>
</html>