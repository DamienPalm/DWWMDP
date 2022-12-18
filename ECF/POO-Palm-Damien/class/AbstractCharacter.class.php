<?php

Abstract class AbstractCharacter{
    private int $lifePoint;
    private int $strenghtPoint;
    
    protected function __construct($lifePoint, $strenghtPoint)
    {
        $this->lifePoint = $lifePoint;
        $this->strenghtPoint = $strenghtPoint;
    }

    public function getLifePoint(){return $this->lifePoint;}
    public function getStrenghtPoint(){return $this->strenghtPoint;}

    public function setLifePoint($lifePoint){$this->lifePoint = $lifePoint;}
    public function steStrenghtPoint($strenghtPoint){$this->strenghtPoint = $strenghtPoint;}

    public function attack($pv, $pa){
        while($pv>0){
            $pv = $pv - $pa;
        }

    }
}