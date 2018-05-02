<?php

require_once ("aeropuertos.php");

class Pistas {

    var $codigo;
    var $longuitud;
    var $orientacion;

    function __construct($longuitud, $orientacion){

        $this->longuitud = $longuitud;
        $this->orientacion = $orientacion;

    }

    function getLoguitud(){

        return $this->longuitud;
    }

    function setLonguitud($longuitud){

        $this->longuitud = $longuitud;
    }

    function getOrientacion(){

        return $this->orientacion;
    }

    function setOrientacion($orientacion){

        $this->orientacion = $orientacion;
        
    }

    function mostrar(){

        echo "La longuitud de la pista es".getLonguitud();
        
        echo "<br>";

        echo "La orientacion".getOrientacion();

        echo "<br>";

    }
}