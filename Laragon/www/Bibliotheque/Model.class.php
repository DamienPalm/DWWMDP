<?php

abstract class Model{
    private static $pdo; // static pour être accessible aux classes filles

    private static function setBdd(){
        self::$pdo = new PDO("mysql:host=localhost; dbname=bibliotheque; charset=utf8", "root", "");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); //Gestion des erreurs
    }

    protected function getBdd(){
        if(self::$pdo === null){
            self::setBdd();
        }
        return self::$pdo;
    }
}