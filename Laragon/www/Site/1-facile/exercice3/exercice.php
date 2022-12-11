<?php ob_start() ?>

<form action="" method="get">
    <label class="col-form-label col-form-label-lg mt-4" for="pseudo">
        <input class="form-control form-control-lg" type="string" placeholder="Votre pseudo" id="pseudo" name="pseudo" />
    </label>
    <label class="col-form-label col-form-label-lg mt-4" for="âge">
        <input class="form-control form-control-lg" type="number" placeholder="Votre âge" id="âge" name="âge" />
    </label>
    <p><input type="submit" class="btn btn-secondary" value="Valider"></p>
</form>

<?php


if(isset($_GET["pseudo"])){
    echo "<div class='card'>";
    echo "<div class='card-body'>";
    echo "<p class='card-text'>";
    echo "Votre pseudo est : " . "<b>" . $_GET['pseudo'] . "</b>";
    echo "</p>";
}
else{}

if(isset($_GET["âge"])){
    echo "Vous avez : " . $_GET['âge'] . " ans";
}
else{}

?>

<?php
$content = ob_get_clean();
$titre = "Exercice3";
require "../../template.php";
?>