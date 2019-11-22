<?php

function HashPwd($password) {
// cost est compris entre 4 et 31 et d�finie la difficult� pour crack� le mdp, plus le chiffre est �lev� plus cout pour trouv� le mdp est long
    $cost = 10;
//Random Salt
    $salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

//Prefix du salt pour lui dire qu'on utilise Blowfish + les param�tres du cout
    $salt = sprintf("$2y$%02d$", $cost) . $salt;

//Hash password
    global $hash;
    $hash = crypt($password, $salt);

    if (crypt($password, $hash) == $hash) {
        
    } else {
        ?>
        <script type="text/javascript">
            alert("Une erreur s'est produite lors du cryptage de votre mot de passe, contactez l'administrateur.");
            showModalDialog("contact.php");
        </script>
        <?php

    }
    return $hash;
}
?>