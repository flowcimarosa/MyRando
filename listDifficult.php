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
                    <span class="icon fa-bar-chart-o"></span>
                    <h2><b>Les difficultées</b></h2>
                    <p>Voici la liste des <strong>difficultées</strong>que vous serez à rencontrait :<p>
                </header>
            </section>
            <!-- One -->
            <section id="list" class="wrapper style3 container">
                <div class="row oneandhalf">
                    <div class="4u">
                        <!-- Sidebar -->
                        <div class="sidebar">
                            <section>
                                <header>
                                    <h3><b>Les niveaux de diffcultées</b> :</h3>
                                </header>
                            </section>
                        </div>
                    </div>
                    <div class="8u skel-cell-important">
                        <div id="cta">
                            <table>
                                <thead><tr><td><b>Niveau diffcultée</b></td><td><b>Description</b></td></tr></thead>
                                <?php include 'inc/listDifficult.inc.php'; ?>
                            </table>
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