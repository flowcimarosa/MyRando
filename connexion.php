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
                <p><strong>Connectez-vous</strong> dans le monde de la<br>
                    <strong>randonnée</strong> !</p>
                <!--formulaire de connexion-->
                <footer>
                    <form id="login" method="POST">
                        <div class="row half no-collapse-1">
                            <div class="6u">
                                <input type="text" name="mypseudo" placeholder="Pseudo" />
                            </div>
                            <div class="6u">
                                <input type="password" name="mypass" placeholder="Mot de passe" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="12u">
                                <ul class="buttons">
                                    <li><input type="submit" class="button fit scrolly" value="connexion" name="connexion"/></li>
                                </ul>
                            </div>
                            <div class="12u">
                                <ul class="buttons">
                                    <li><a href="#main" class="button fit scrolly">Pas inscrit ?</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </footer>
            </div>
        </section>
        <!-- Main -->
        <article id="main">
            <header class="special container">
                <span class="icon fa fa-archive"></span>
                <h2>Inscrivez-vous et rejoingnez-nous !</h2>
            </header>
            <!--formulaire d'inscription-->                
            <section class="wrapper style4 special container small">
                <div class="content">
                    <form id='inscription' action="inc/register.inc.php" method='POST'>
                        <div class="row half no-collapse-1">
                            <div class="6u">
                                <input id='prenom' type="text" name="prenom" placeholder="Prénom" />
                            </div>
                            <div class="6u">
                                <input id='nom' type="text" name="nom" placeholder="Nom" />
                            </div>
                        </div>
                        <div class="row half">
                            <div class="12u">
                                <input id='pseudo' type="text" name="pseudo" onblur="verifPseudo(this.value)" placeholder="Pseudo*" /><div id='pseudoverif'></div>
                            </div>
                        </div>
                        <div class="row half">
                            <div class="6u">
                                <input type="text" name="adresse" placeholder="Adresse" />
                            </div>
                            <div class="6u">
                                <input type="text" name="cp" placeholder="Code postal" />
                            </div>
                        </div>
                        <div class="row half">
                            <div class="6u">
                                <input type="text" name="ville" placeholder="Ville" />
                            </div>
                            <div class="6u">
                                <input type="text" name="tel" placeholder="Téléphone" />
                            </div>
                        </div>
                        <div class="row half">
                            <div class="12u">
                                <input id='mail' type="text" name="mail" onblur="verifMail(this.value)" placeholder="Email*" /><div id='emailcheck'></div>
                            </div>
                        </div>
                        <div class="row half">
                            <div class="12u">
                                <input id='mail2' type="text" name="mail2" onblur="check_mail()" placeholder="Confirmer votre email*" /><div id='emailcheck2'></div>
                            </div>
                        </div>
                        <div class="row half">
                            <div class="12u">
                                <input id='pwd' type="password" name="pass" placeholder="Mot de passe*" /><div id='pwdcheck'></div>
                            </div>
                        </div>
                        <div class="row half">
                            <div class="12u">
                                <input id='pwd2' type="password" name="pass2" onblur="check_pwd()" placeholder="Confirmer votre mot de passe*" /><div id='pwdcheck2'></div>
                            </div>
                        </div>
                        <legend style='font-size: 12px'>* obligatoire</legend>
                        <div class="row">
                            <div class="12u">
                                <ul class="buttons">
                                    <li><input type="submit" class="button special" value="S'inscrire" name="inscription"/></li>
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
