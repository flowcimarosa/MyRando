<?php
if (isset($_SESSION['login'])) {
    ?>
<a class="button fit scrolly" href=<?php echo "mailto:floriandirosa@gmail.com?subject=(".$_SESSION['username'].")&body=Bonjour,"; ?> >Poser la !</a>
        <?php
} else{
    ?>
    <a class="button fit scrolly" href="mailto:floriandirosa@gmail.com">Poser la !</a>
    <?php
}
?>
