<?php

require_once ("empleados.php");

class Personaloperativo extends Empleado{

    var $terminal;
    

    function __construct($nombre, $fechanacimiento, $personaloperativo, $terminal){

        parent::__construct($nombre, $fechanacimiento, $personaloperativo);

        $this->terminal = $terminal;
    }

    function getTerminal(){

        return $this->terminal;
    }

    function setTerminal($terminal){

        $this->terminal = $terminal;
    }

   
    function mostar(){

        parent::mostar();

        echo "La terminal es".getTerminal();

        echo "<br>";
    }
}
