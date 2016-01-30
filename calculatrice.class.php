<?php

/*
 * CLASS CALCULATRICE
 * Permet de faire des fonctions mathématiques
 * */

class calculatrice{

    /*
     * ATTRIBUT(S) PRIVE(S)
     * */

    private $_valeurs = [];

    /*
     * CONSTRUCTEUR PUBLIQUE
     * */

    public function __construct(array $v){
        $this->_valeurs = $v;
    }

    public function calculer($c){
        switch($c){
            case "a":
                return $this->addition();
                break;
            case "s":
                return $this->soustraction();
                break;
            case "m":
                return $this->multiplication();
                break;
            case "d":
                return $this->division();
                break;
            default:
                return "Erreur";
                break;
        }
    }

    private function addition(){
        $r = 0;
        foreach($this->_valeurs as $v){
            $r += $v;
        }
        return $r;
    }

    private function soustraction(){
        $r = $this->_valeurs[0]*2;
        foreach($this->_valeurs as $v){
            $r -= $v;
        }
        return $r;
    }

    private function multiplication(){
        $r = 1;
        foreach($this->_valeurs as $v){
            $r *= $v;
        }
        return $r;
    }

    private function division(){
        $r = pow($this->_valeurs[0],2);
        foreach($this->_valeurs as $v){
            $r /= $v;
        }
        return $r;
    }


    public function getValeurs(){
        return $this->_valeurs;
    }

    public function setValeurs($valeurs){
        $this->_valeurs = $valeurs;
    }





}

?>