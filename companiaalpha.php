<?php

require_once ("companiasaereas.php");

class Compañiaalpha extends Companiasaereas{

    var $codigoautorizacionaerea;

    function __construct($nombre, $telefonoemergencia, $codigoautorizacionaerea){

        $this->codigoautorizacionaerea;
    }

    function getCodigoautorizacionaerea(){

        return $this->codigoautorizacionaerea;
    }

    function setNombre($codigoautorizacionaerea){

        $this->codigoautorizacionaerea = $codigoautorizacionaerea;
    }


    function mostrar(){

        parent:: mostrar();

        echo "El codigo de autorizacion es".getCodigoautorizacion;

        echo "<br>";
    }
}