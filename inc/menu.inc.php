<header id="header" class="alt">
    <nav id="nav">
        <?php
        include 'login.inc.php';
        try {
            $connexion = new PDO('mysql:host=sql2.olympe.in;dbname=1wlyp50x', '1wlyp50x', 'root');
            if (isset($_SESSION['username'])) {
                $ses1 = $_SESSION['username'];
                $vco1 = "select * from utilisateur where pseudo ='" . $ses1 . "'";
                $res1 = $connexion->query($vco1);
                if ($donne = $res1->fetch(PDO::FETCH_ASSOC)) {
                    $statut1 = $donne['status'];

                    if ($statut1 == 'user') {
                        ?>
                        <ul>
                            <li class="current"><a href="index.php">Accueil</a></li>
                            <li class="current">
                                <a>Les randonnées</a>
                                <ul>
                                    <li><a href="listRando.php">Liste des randonées</a></li>
                                    <li><a href="searchRando.php">Chercher une randonnée</a></li>
                                </ul>
                            </li>
                            <li class="current">
                                <a>Les secteurs</a>
                                <ul>
                                    <li><a href="listSector.php">Liste des secteurs</a></li>
                                </ul>
                            </li>
                            <li class="current">
                                <a>Les difficultées</a>
                                <ul>
                                    <li><a href="listDifficult.php">Liste des diffucltées</a></li>
                                </ul>
                            </li>
                            <li class="current"><a href="contact.php">Contact</a></li>
                            <?php
                            if (isset($_SESSION['login'])) {
                                ?><li class='submenu opener'><a><?php echo $_SESSION['username'] . ", vous êtes " . $_SESSION['status']; ?>
                                        <ul><li><a id="deconnect" href="inc/logout.inc.php">Deconnexion</a></li></ul></li><?php
                            } else {
                                ?>

                                <li><a href="connexion.php" class="button special">Connexion/Inscription</a></li><?php
                            }
                            ?>
                        </ul>
                        <?php
                    } elseif ($statut1 == 'admin') {
                        ?>
                        <ul>
                            <li class="current"><a href="index.php">Accueil</a></li>
                            <li class="current">
                                <a>Les randonnées</a>
                                <ul>
                                    <li><a href="listRando.php">Liste des randonées</a></li>
                                    <li><a href="searchRando.php">Chercher une randonnée</a></li>
                                    <li><a href="ajoutRando.php">Ajouter une randonnée</a></li>
                                    <li><a href="ajoutEtape1.php">Ajouter une étape</a></li>
                                    <li><a href="ajoutEtape.php">Ajouter une étape inexistante</a></li>
                                </ul>
                            </li>
                            <li class="current">
                                <a>Les secteurs</a>
                                <ul>
                                    <li><a href="listSector.php">Liste des secteurs</a></li>
                                    <li><a href="ajoutSector.php">Ajouter un secteur</a></li>
                                </ul>
                            </li>
                            <li class="current">
                                <a>Les difficultées</a>
                                <ul>
                                    <li><a href="listDifficult.php">Liste des diffucltées</a></li>
                                    <li><a href="ajoutDifficult.php">Ajouter une diffcultée</a></li>
                                </ul>
                            </li>
                            <li class="current"><a href="contact.php">Contact</a></li>
                            <?php
                            if (isset($_SESSION['login'])) {
                                ?><li class='submenu opener'><a><?php echo $_SESSION['username'] . ", vous êtes un " . $_SESSION['status']; ?>
                                        <ul>
                                            <li><a href="admin.php">Administration</a></li>
                                            <li><a id="deconnect" href="inc/logout.inc.php">Deconnexion</a></li>
                                        </ul></li><?php
                            } else {
                                ?>

                                <li><a href="connexion.php" class="button special">Connexion/Inscription</a></li><?php
                            }
                            ?>
                        </ul>
                        <?php
                    }
                } else {
                    ?>
                    <ul>
                        <li class="current"><a href="index.php">Accueil</a></li>
                        <li class="current">
                            <a>Les randonnées</a>
                            <ul>
                                <li><a href="listRando.php">Liste des randonées</a></li>
                            </ul>
                        </li>
                        <li class="current">
                            <a>Les secteurs</a>
                            <ul>
                                <li><a href="listSector.php">Liste des secteurs</a></li>
                            </ul>
                        </li>
                        <li class="current">
                            <a>Les difficultées</a>
                            <ul>
                                <li><a href="listDifficult.php">Liste des diffucltées</a></li>
                            </ul>
                        </li>
                        <li class="current"><a href="contact.php">Contact</a></li>
                        <li><a href="connexion.php" class="button special">Connexion/Inscription</a></li></ul>
                    <?php
                }
            } else {
                ?>
                <ul>
                    <li class="current"><a href="index.php">Accueil</a></li>
                    <li class="current">
                        <a>Les randonnées</a>
                        <ul>
                            <li><a href="listRando.php">Liste des randonées</a></li>
                        </ul>
                    </li>
                    <li class="current">
                        <a>Les secteurs</a>
                        <ul>
                            <li><a href="listSector.php">Liste des secteurs</a></li>
                        </ul>
                    </li>
                    <li class="current">
                        <a>Les difficultées</a>
                        <ul>
                            <li><a href="listDifficult.php">Liste des diffucltées</a></li>
                        </ul>
                    </li>
                    <li class="current"><a href="contact.php">Contact</a></li>
                    <li><a href="connexion.php" class="button special">Connexion/Inscription</a></li></ul>
                        <?php
                    }
                } catch (PDOException $e) {
                    die($dsn . "erreur : " . $e->getMessage());
                }
                ?>
    </nav>
</header>