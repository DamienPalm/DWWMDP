<?php

class Maison{
    private static $identifiant=1;
    private $id;
    private $date;
    private $chambre;
    private $surface; 

    public function __construct($date, $chambre,$surface){
        $this->date = $date;
        $this->chambre = $chambre;
        $this->surface = $surface;
        $id=self::$identifiant++;
        $this->id=$id;
    }

    public function getId(){
        return $this->id;
    }

    public function getDate(){
        return $this->date;
    }

    public function getChambre(){
        return $this->chambre;
    }

    public function getSurface(){
        return $this->surface;
    }

    public function presentation(){
        echo "#" . $this->id . "<br>";
        echo "<b>Date de création : </b>" . $this->date . "<br/>";
        echo "<b>Nombre de chambre : </b>" . $this->chambre . "<br/>";
        echo "<b>Surface : </b>" . $this->surface . "<br>";
    }
}

?>