<?php
try {
    $connexion = new PDO('mysql:host=sql2.olympe.in;dbname=1wlyp50x', '1wlyp50x', 'root');
    if (!isset($_SESSION['username'])) {
        ?>
        <!-- CTA -->
        <section id="cta">
            <header>
                <h2>Vous souhaitez faire partie de la <strong>famille</strong>?</h2>
                <p>Connectez-vous ou inscrivez-vous, et préparer vos randos.</p>
            </header>
            <footer>
                <ul class="buttons">
                    <li><a href="connexion.php" class="button special">Connexion</a></li>
                    <li><a href="connexion.php#insciption" class="button">Inscription</a></li>
                </ul>
            </footer>
        </section>
        <?php
    } else {
        ?>
        <!-- CTA -->
        <section id="cta">
            <header>
                <h2>Le site de vos randonnées en Lozère</h2>
            </header>
        </section>
        <?php
    }
} catch (PDOException $e) {
    die($dsn . "erreur : " . $e->getMessage());
}
?>
