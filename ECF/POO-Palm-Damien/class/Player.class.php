<?php
require_once "BanditManchot.class.php";
require_once "AbstractCharacter.class.php";
require_once "Monster.class.php";

class Player extends AbstractCharacter
{
    private int $score;
    private string $pseudo;

    public function __construct($score, $pseudo, $lifePoint, $strenghtPoint)
    {
        $this->score = $score;
        $this->pseudo = $pseudo;
        AbstractCharacter::__construct($lifePoint, $strenghtPoint);
    }

    public function getScore()
    {
        return $this->score;
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setScore($score)
    {
        $this->score = $score;
    }
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function play(BanditManchot $banditManchot, Player $player){
        $play = readline("Voulez-vous affronter le Bandit Manchot ? ");
        $play = "oui";
        if($play){
            $banditManchot->winOrLose();
            $banditManchot->howManyWeWinOrLose($banditManchot, $player->getLifePoint());
        }
        else{
            echo "Saisir 0 pour quitter" . "\n" . "Saisir 1 pour aller au nord" . "\n" . "Saisir 2 pour aller au sud" . "\n" . "Saisir 3 pour aller à l'est" . "\n" . "Saisir 4 pour aller à l'ouest" . "\n";
            $move = readline("Votre choix : ");
        }

    }

    public function move()
    {
        echo "Saisir 0 pour quitter" . "\n" . "Saisir 1 pour aller au nord" . "\n" . "Saisir 2 pour aller au sud" . "\n" . "Saisir 3 pour aller à l'est" . "\n" . "Saisir 4 pour aller à l'ouest" . "\n";

        $move = readline("Votre choix : ");

        switch ($move) {
            case 0:
                break;
        
            case 1:
                rand(1, 6);
                break;

            case 2:
                rand(1, 6);
                break;

            case 3:
                rand(1, 6);
                break;
            
            case 4:
                rand(1, 6);
                break;
        }
    }
}
