<?php

require_once ("companiasaereas.php");

class Compañiagamma extends Companiasaereas{

    var $añofundacion;

    function __construct($nombre, $telefonoemergencia, $añofundacion){

        $this->añofundacion;
    }

    function getAñofundacion(){

        return $this->añofundacion;
    }

    function setNombre($añofundacion){

        $this->añofundacion = $añofundacion;
    }


    function mostrar(){

        parent:: mostrar();

        echo "El año de fundacion es".getAñofundacion();

        echo "<br>";
    }
}