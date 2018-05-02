<?php

class Empleado{

    var $nombre;
    var $fechanacimiento;
    var $numvuelosefectuados;
    

    function __construct($nombre, $fechanacimiento, $numvuelosefectuados){

        $this->nombre = $nombre;
        $this->fechanacimiento = $fechanacimiento;
        $this->$numvuelosefectuados = $numvuelosefectuados;

    }

    function getNombre(){

        return $this->nombre;
    }

    function setNombre($nombre){

        $this->nombre = $nombre;
    }

    function getFechanacimiento(){

        return $this->fechanacimiento;
    }
    
    function setFechanacimiento($fechanacimiento){

        $this->fechanacimiento = $fechanacimiento;
    }

    function getNumvuelosefectuados(){

        return $this->numvuelosefectuados;
    }

    function setNumvuelosefectudos($numvuelosefectuados){

        $this->numvuelosefectuados = $numvuelosefectuados;
    }

    function mostar(){

        echo "Nombre".getNombre();

        echo "<br>";

        echo "Fecha de nacimiento".getFechanacimiento;

        echo "<br>";

        echo "Numero de vuelos".getNumvuelosefectuados();

        echo "<br>";
    }
}