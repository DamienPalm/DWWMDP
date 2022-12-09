<?php ob_start() ?>


<?php
require "Client.php";
require "Produit.php";
require "commande.php";
require "ligneDeCommande.php";

$client = new Client ("Bird", "Larry", "411001");

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

?>


<form action="" method="post">
    <ul>
        <li><?=$produit1?></li>
    </ul>
</form>

<?php


?>
<?php
$content = ob_get_clean();
$titre = "Exercice Commande";
require "../template.php";
?>