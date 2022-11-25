<?php ob_start() ?>

<form action="" method="post">
    <p>Pseudo : <input type="string" name="pseudo" /></p>
    <p>Mot de passe : <input type="password" id="pass" name="password" minlength="8" required></p>
    <p><input type="submit" value="Se connecter"></p>
</form>

<?php

if(isset($_POST['pseudo'])){
$pseudo = $_POST['pseudo'];

echo "Bonjour " . $pseudo . " vous êtes bien connecté ";
}

?>




<?php
$content = ob_get_clean();
$titre = "exercice 1 : Connectez-vous";
require "../template.php";
?>