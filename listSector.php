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
                    <span class="icon fa-arrows"></span>
                    <h2><b>Les secteurs</b></h2>
                    <p>Voici la liste des <strong>secteurs</strong>qui couvrent notre site :<p>
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
                                    <a><strong>Nos secteurs</strong></a>
                                    <br>
                                    <br>
                                    <p><?php include 'inc/listSector.inc.php'; ?></p>
                                </header>
                            </section>
                        </div>
                    </div>
                    <div class="8u skel-cell-important">
                        <!-- Content -->
                        <div class="content">
                            <section id="cta">
                            </section>
                            <br/>
                            <section id="cta">
                            </section>
                            <br/>
                            <section id="cta">
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </article>
        <!-- CTA -->
        <section id="cta">
            <header>
                <h3>Vous souhaiter plus de <strong>secteurs</strong> ?</h3>
                <p>Contactez l'administrateur pour une proposition.</p>
            </header>
            <footer>
                <ul class="buttons">
                    <li><a href="contact.php" class="button">Contactez-le !</a></li>
                </ul>
            </footer>
        </section>
        <?php
        include_once 'inc/footer.inc.php';
        ?>
    </body>
</html>