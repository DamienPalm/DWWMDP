<?php
require("./service/fonction.php");
spl_autoload_register('chargerClasse');

$pseudo = readline("Entrer votre pseudo : ");

$player = new Player(0, $pseudo, 100, 20);

echo $player->move();

if(rand(1, 6) == 1 || rand(1, 6) == 6){
    $banditManchot = new BanditManchot;
    echo $banditManchot->winOrLose();
}

else{
    $monstre = new Monster(rand (20, 100), rand(5, 10));
}