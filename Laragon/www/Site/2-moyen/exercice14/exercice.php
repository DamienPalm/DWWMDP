<?php ob_start() ?>


<?php
require "maison.php";

$maison1 = new Maison(2018, 3, 98);
$maison2 = new Maison(2019, 4, 120);
$maison3 = new Maison(2020, 4, 125);
$maison4 = new Maison(2021, 5, 130);
$recupMaison = [$maison1, $maison2, $maison3, $maison4];

?>

<table class="table table-dark table-striped-columns table-bordered border-light">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Date</th>
      <th scope="col">Chambre</th>
      <th scope="col">Surface</th>
    </tr>
  </thead>
  <tbody>
    <?php for ($i = 0; $i < count($recupMaison); $i++) : ?>
      <tr>
        <th scope="row"><?= $recupMaison[$i]->getId() ?></th>
        <td><?= $recupMaison[$i]->getDate() ?></td>
        <td><?= $recupMaison[$i]->getChambre() ?></td>
        <td><?= $recupMaison[$i]->getSurface() ?></td>
      </tr>
    <?php endfor ?>
  </tbody>
</table>

<?php
$content = ob_get_clean();
$titre = "Exercice Static Maison";
require "../../template.php";
?>