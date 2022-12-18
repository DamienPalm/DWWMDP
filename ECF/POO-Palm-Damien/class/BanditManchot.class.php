<?php
class BanditManchot{
    public function winOrLose(){
        $aleatoire = rand(1,2);
        return $aleatoire;

    }

    public function howManyWeWinOrLose($banditManchot,$pv){
        if($banditManchot->winOrLose()==1){
            $pv = $pv + rand(1, 10);
        }
        else{
            $pv = $pv - rand(1, 10);
        }
    }
}