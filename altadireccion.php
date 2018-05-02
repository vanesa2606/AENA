<?php
require_once ("empleados.php");
class Altadireccion extends Empleado{

    var $numacciones;
    

    function __construct($nombre, $fechanacimiento, $personaloperativo, $numacciones){

        parent::__construct($nombre, $fechanacimiento, $personaloperativo);

        $this->numacciones = $numacciones;
    }

    function getNumacciones(){

        return $this->numacciones;
    }

    function setNumacciones($numacciones){

        $this->numacciones = $numacciones;
    }

   
    function mostar(){

        parent::mostar();

        echo "El numero de acciones es".getNumacciones();

        echo "<br>";
    }
}