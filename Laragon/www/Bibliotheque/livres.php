<?php

require_once "LivreManager.class.php";
$livreManager = new LivreManager;
$livreManager->chargementLivre();

ob_start() ?>

<table class="table text-center table-striped">
    <tr class= "table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de pages</th>
        <th colspan="2">Actions</th>
    </tr>

    <?php
    $livres = $livreManager->getLivres();
    for($i=0 ; $i<count($livres) ; $i++) :
    ?>

    <tr>
        <td class="align-middle"><img src="public/images/<?= $livres[$i]->getImage(); ?>" width="60px" alt=""></td>
        <td class="align-middle"><?= $livres[$i]->getTitre(); ?></td>
        <td class="align-middle"><?= $livres[$i]->getNbPage(); ?></td>
        <td class="align-middle"><a href="" class="btn btn-secondary">Modifier</a></td>
        <td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    <?php endfor; ?>
</table>
<a href="" class="btn btn-success d-block">Ajouter</a>


<?php
$content = ob_get_clean();
$titre = "Les livres de la bibliothèque";
require "template.php";