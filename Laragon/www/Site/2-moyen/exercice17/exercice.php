<?php ob_start() ?>


<?php
require "Client.php";
require "Produit.php";
require "Commande.php";
require "LignedeCommande.php";

$client = new Client ("Bird", "Larry", "411001");

echo "<div class='card'>";
echo "<div class='card-body'>";
echo "<p class='card-text'>";
echo $client->afficher();
echo "---------------------------------------" . "<br>";

$produit1 = new Produit ("001", "Iphone 14 Pro Max", "701001", 1479);
$produit2 = new Produit ("002", "MacBook Pro", "701002", 2749);
$produit3 = new Produit ("003", "Apple Watch Ultra" , "701003", 999);
$produit4 = new Produit ("004", "AirPods Pro", "701004", 299);
$listeProduits = [$produit1, $produit2, $produit3, $produit4];

foreach ($listeProduits as $produit){
    echo $produit->afficherSesInfos();
    echo "---------------------------------------" . "<br>";
}
echo "</p>";
echo "</div>";
echo "</div>" . "<br>";
?>


<form action="" method="post">
        <div class="dropdown col-3">
            <button class=" form-control form-control-lg btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Selectionner un produit
            </button>
            <ul class="dropdown-menu">
                <li><input class="dropdown-item" type="submit" value="<?= $produit1->getDescription() ?>" name="produit" /></li>
                <li><input class="dropdown-item" type="submit" value="<?= $produit2->getDescription() ?>" name="produit" /></li>
                <li><input class="dropdown-item" type="submit" value="<?= $produit3->getDescription() ?>" name="produit" /></li>
                <li><input class="dropdown-item" type="submit" value="<?= $produit4->getDescription() ?>" name="produit" /></li>
            </ul>
        </div>
</form>

<?php

$continuer = "Oui";

if(isset($_POST["produit"])){
    echo "<form action='' method='post'>";
    echo "<label class='col-3 col-form-label col-form-label-lg mt-4' for='quantité'>";
    echo "<input class='form-control form-control-lg btn btn-dark' type='number' placeholder='Quantité souhaitée' id='quantité' name='quantité'>";
    echo "<input class='form-control form-control-lg btn btn-dark' type='submit' value='Validez' id='quantité' name='valider'";
    echo "</label>";
    echo "</form>";

    if(isset($_POST["valider"])){
        echo $LignedeCommande->calculTotalLigneTTC($_POST["produit"]->getPxUnitaireTTC(), $quantité);
    }
}
else{
    echo "Veuillez choisir un produit";
}

?>
<?php
$content = ob_get_clean();
$titre = "Exercice Commande";
require "../../template.php";
?>