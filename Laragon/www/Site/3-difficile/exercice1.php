<?php ob_start() ?>

<form action="" method="post">
    <label for="email" class=form-label>Adresse e-mail :</label>
    <input type="email" class=form-control id="email" name="mail" placeholder="Adresse e-mail" /><br>
    <label for="pass" class=form-label>Mot de passe :</label>
    <input type="password" class=form-control id="pass" name="password" minlength="8" required placeholder="Saisissez votre mot de passe" /><br>
    <button type="submit" class="btn btn-info">Se connecter</button>
</form>

<?php

if (isset($_POST['mail'])) {
    $pseudo = "Damien";

    echo "Bonjour " . $pseudo . " vous êtes bien connecté ";
}

?>




<?php
$content = ob_get_clean();
$titre = "exercice 1 : Connectez-vous";
require "../template.php";
?>