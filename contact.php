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
    <body class="index loading">
        <?php
        include_once 'inc/menu.inc.php';
        ?>
        <!-- Banner -->		
        <section id="banner">
            <div class="inner">
                <header>
                    <h2>MyRando</h2>
                </header>
                <p><b>Vous avez des question </b>?</p>
                <footer>
                    <form>
                        <div class="row">
                            <div class="12u">
                                <ul class="buttons">
                                    <li><?php include_once 'inc/contact.inc.php'; ?></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </footer>
            </div>
        </section>
        <?php
        include_once 'inc/footer.inc.php';
        ?>
    </body>
</html>