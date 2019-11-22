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
                <p>Le <strong>site</strong> de vos <strong>randonnée</strong><br/>
                    en <strong>Lozère !</strong></p>
                <footer>
                    <ul class="buttons vertical">
                        <li><a href="#main" class="button fit scrolly">Randonner en Lozère</a></li>
                    </ul>
                </footer>
            </div>
        </section>
        <!-- Main -->
        <article id="main">
            <header class="special container">
                <span class="icon fa fa-pagelines"></span>
                <h2>La <strong>Lozère</strong></h2>
                <p>Vertes au Nord, l'<strong>Aubrac</strong>et la <strong>Margeride</strong> 
                    sont d’anciennes terres volcaniques riches d’une faune et d’une flore préservées.
                    <strong>Ocres au Sud</strong>, les <strong>Causses</strong> et <strong>Cévennes</strong>, 
                    classés au patrimoine mondial de l’<a href="https://fr.unesco.org/" target="_blank">UNESCO</a>sur la thématique
                    paysage culturel de l’agro-pastoralisme méditerranéen et le <strong>Mont-Lozère</strong> vous régaleront avec un panorama à 360°.
                    Les activités de pleine nature, nombreuses et variées, combleront les amateurs de sensations fortes. 
                    Quant aux hébergements touristiques, ils sauront vous accueillir pour un repos bien mérité.
                    Haute terre du <trong>Languedoc Roussillon</strong> aux nombreux cours d’eau sculptant 
                    les <strong>gorges du Tarn</strong>, de la <strong>Jonte</strong>,
                    et de la <strong>Vallée du Lot</strong>, la <strong>Lozère</strong> ravira tous 
                    les amoureux de la nature.
                    </p>
            </header>
            <!-- One -->
            <section class="wrapper style2 container special-alt">
                <div class="row half">
                    <div class="8u">
                        <header>
                            <h2>Randonnée en <strong>Lozère</strong></h2>
                        </header>
                        <p>Le comité départemental gère plus de 2 450 km de sentiers dont <br>1 950 km de
                            Grande Randonnée (GR) et 500 km de Promenade et Randonnée (PR).
                            Certains grands itinéraires célèbres traversent <br>la Lozère, notamment 
                            le Chemin de Saint Jacques de Compostelle (GR65), La Regordane (GR 700) ou 
                            bien le Chemin de Stevenson (GR70).
                            Le “Tour du Mont-Lozère” (GR68) ou le “Tour des Monts d’Aubrac” (GR6 et GR60) 
                            constituent également de grands classiques régionaux de la randonnée.
                        </p>
                        <footer>
                            <ul class="buttons">
                                <li><a href="carte.php" class="button">Où c'est ?</a></li>
                            </ul>
                        </footer>
                    </div>
                    <div class="4u skel-cell-important">

                        <ul class="feature-icons">
                            <li><span class="icon fa-bug"><span class="label">Feature 1</span></span></li>
                            <li><span class="icon fa-fire"><span class="label">Feature 2</span></span></li>
                            <li><span class="icon fa-leaf"><span class="label">Feature 3</span></span></li>
                            <li><span class="icon fa-globe"><span class="label">Feature 4</span></span></li>
                            <li><span class="icon fa-arrows"><span class="label">Feature 5</span></span></li>
                            <li><span class="icon fa-camera-retro"><span class="label">Feature 6</span></span></li>
                        </ul>
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
