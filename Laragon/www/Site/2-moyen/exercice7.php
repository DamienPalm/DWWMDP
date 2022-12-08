<?php ob_start() ?>


<?php

class Employe
{
  public $nom;
  public $prenom;
  public $domicile;
  public $ville;
  public $tel;

  public function __construct($nom, $prenom, $domicile, $ville, $tel)
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->adresse = $domicile;
    $this->ville = $ville;
    $this->telephone = $tel;
  }

  public function affichage()
  {
    echo "Nom : " . $this->nom . "<br>" . "Prénom : " . $this->prenom . "<br>" . "Adresse : " . $this->adresse . "<br>" .
      "Ville : " . $this->ville . "<br>" . "Numéro de téléphone : " . $this->telephone . "<br>";
  }
}

$employe1 = new Employe("Palm", "Damien", "873 boulevard Georges Pompidou", "Bray-Dunes", "06.37.02.06.30");
$employe2 = new Employe("Meteyer", "Lucie", "Résidence Orléans, Bat B, Apt.3, Allée de Fréjus", "Saint-Pol sur Mer", "06.41.49.56.08");
$employes = [$employe1, $employe2];

$employe1->affichage();
echo "";
echo "----------------------------------------" . "<br>";

$employe2->affichage();
echo "<br>";

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Ville</th>
      <th scope="col">Numéro de téléphone</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php $employe1 ?>1</th>
      <td><?= $employe1->nom ?></td>
      <td><?= $employe1->prenom ?></td>
      <td><?= $employe1->adresse ?></td>
      <td><?= $employe1->ville ?></td>
      <td><?= $employe1->telephone ?></td>
    </tr>
    <tr>
      <th scope="row"><?php $employe2 ?>2</th>
      <td><?= $employe2->nom ?></td>
      <td><?= $employe2->prenom ?></td>
      <td><?= $employe2->adresse ?></td>
      <td><?= $employe2->ville ?></td>
      <td><?= $employe2->telephone ?></td>
    </tr>
  </tbody>
</table>

<?php
$content = ob_get_clean();
$titre = "Exercice 1 POO - les objets";
require "../template.php";
?>