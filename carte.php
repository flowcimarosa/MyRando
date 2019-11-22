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
                <span class="icon fa-globe"></span>
                <h2>Vos Randonnées seront dans ces lieux</h2>
            </header>

            <!-- One -->
            <section class="wrapper style4 special container small">

                <!-- Content -->
                <div class="content">
                    <form>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d727975.9324038672!2d3.4897814999999994!3d44.54267595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b36c30211fef9f%3A0x307882116652880!2zTG96w6hyZQ!5e0!3m2!1sfr!2sfr!4v1398781231833" width="600" height="450" frameborder="0" style="border:0"></iframe>
                    </form>
                </div>
            </section>
        </article>
        <?php
        include_once 'inc/footer.inc.php';
        ?>
    </body>
</html>