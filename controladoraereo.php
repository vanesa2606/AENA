<?php

require_once ("empleados.php");

class Controladoraereo extends Empleado{

    var $numhorasacumuladas;
    

    function __construc($nombre, $fechanacimiento, $personaloperativo, $numhorasacumuladas){

        parent::__construct($nombre, $fechanacimiento, $personaloperativo);

        $this->numhorasacumuladas = $numhorasacumuladas;
    }

    function getNumhorasacumuladas(){

        return $this->numhorasacumuladas;
    }

    function setNumhorasacumuladas($numhorasacumuladas){

        $this->numhorasacumuladas = $numhorasacumuladas;
    }

   
    function mostar(){

        parent::mostar();

        echo "El numero de horas acumuladas es de ".getNumhorasacumuladas()."horas";

        echo "<br>";
    }
}