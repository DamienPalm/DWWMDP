<?php

class Monster extends AbstractCharacter{

    public function __construct($lifePoint, $strenghtPoint){
        AbstractCharacter::__construct($lifePoint, $strenghtPoint);
    }
}