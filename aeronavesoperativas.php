<?php

require_once ("companiasaereas.php");

class Aeronavesoperativas extends Companiasaereas{

    var $marca;
    var $modelo;
    var $plazas;

    function __construct($nombre, $telefonoemergencia, $marca, $modelo, $plazas){

        parent::__construct();

        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->plazas = $plazas;
    }

    function getMarca(){

        return $this->marca;
    }

    function setMarca($marca){

        $this->marca = $marca;
    }

    function getModelo(){

        return $this->modelo ;
    }

    function setModelo($modelo){

        $this->modelo = $modelo;
    }

    function getPlazas(){

        return $this->plazas;
    }

    function setPlazas($plazas){

        $this->plazas = $plazas;
    }

    function mostrar(){

        parent:: mostrar();

        echo "Marca".getMarca();

        echo "<br>";

        echo "Modelo".getModelo();

        echo "<br>";

        echo "Plazas".getPlazas();

        echo "<br>";
    }
}