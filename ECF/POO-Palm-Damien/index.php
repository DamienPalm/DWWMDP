<?php
require("./service/fonction.php");
spl_autoload_register('chargerClasse');

$pseudo = readline("Entrer votre pseudo : ");

$player = new Player(0, $pseudo, 100, 20);

echo $player->move();

if(rand(1, 6) == 1 || rand(1, 6) == 6){
    $banditManchot = new BanditManchot;
    echo $banditManchot->winOrLose();
    echo $banditManchot->howManyWeWinOrLose($banditManchot, $player->getLifePoint());
}

else{
    $monstre = new Monster(rand (20, 100), rand(5, 10));
    $player->attack($player->getLifePoint(), $player->getStrenghtPoint());
    $monster->attack($monster->getLifePoint(), $monster->getStrenghtPoint());
}