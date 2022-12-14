<?php ob_start() ?>


<?php
require "Client.php";
require "Produit.php";
require "Commande.php";
require "LignedeCommande.php";

$client = new Client("Bird", "Larry", "411001");

echo "<div class='card'>";
echo "<div class='card-body'>";
echo "<p class='card-text'>";
echo $client->afficher();
echo "---------------------------------------" . "<br>";

$produit1 = new Produit("001", "Iphone 14 Pro Max", "701001", 1479);
$produit2 = new Produit("002", "MacBook Pro", "701002", 2749);
$produit3 = new Produit("003", "Apple Watch Ultra", "701003", 999);
$produit4 = new Produit("004", "AirPods Pro", "701004", 299);
$listeProduits = [$produit1, $produit2, $produit3, $produit4];

foreach ($listeProduits as $produit) {
    echo $produit->afficherSesInfos();
    echo "---------------------------------------" . "<br>";
}
echo "</p>";
echo "</div>";
echo "</div>" . "<br>";
$continuer = "Oui";
?>

<form action="" method="get">
    <div class="dropdown col-3">
        <button class=" form-control form-control-lg btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Selectionner un produit
        </button>
        <ul class="dropdown-menu">
            <li><input class="dropdown-item" type="submit" value=<?= $produit1->getDescription() ?> name=<?= $produit1->getDescription() ?>/></li>
            <li><input class="dropdown-item" type="submit" value=<?= $produit2->getDescription() ?> name=<?= $produit2->getDescription() ?>/></li>
            <li><input class="dropdown-item" type="submit" value=<?= $produit3->getDescription() ?> name=<?= $produit3->getDescription() ?>/></li>
            <li><input class="dropdown-item" type="submit" value=<?= $produit4->getDescription() ?> name=<?= $produit4->getDescription() ?>/></li>
        </ul>
    </div>
    <div class='col-3 col-form-label col-form-label-lg mt-4'>
        <input class='form-control form-control-lg btn btn-dark' type='number' placeholder='Quantité souhaitée' name='quantité'>
        <input class='form-control form-control-lg btn btn-dark' type='submit' value='Validez' name='valider'>
    </div>
    <div>
        <input class='btn btn-dark' type='submit' value='Continuer' name='continue'>
        <input class='btn btn-dark' type='submit' value='Payer' name='paie'>
    </div>
</form>

<?php
$content = ob_get_clean();
$titre = "Exercice Commande";
require "../../template.php";
?>