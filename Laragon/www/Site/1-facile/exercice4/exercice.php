<?php ob_start() ?>

<form action="" method="post">
    <label class="col-form-label col-form-label-lg mt-4" for="nb">
        <input class="form-control form-control-lg" type="number" placeholder="Nombre" id="nb" name="nb">
    </label>
    <p><input class="btn btn-secondary" type="submit" value="OK"></p>
</form>

<?php

if(isset($_POST['nb'])){
    if ($_POST['nb'] % 2 == 0) {
        echo "<div class='card'>";
        echo "<div class='card-body'>";
        echo "<p class='card-text'>";
        echo $_POST['nb'] . " est pair";
        echo "</p>";
    } else {
        echo "<div class='card'>";
        echo "<div class='card-body'>";
        echo "<p class='card-text'>";
        echo $_POST['nb'] . " est impair";
        echo "</p>";
    }
}
else{}

?>

<?php
$content = ob_get_clean();
$titre = "Exercice4";
require "../../template.php"
?>