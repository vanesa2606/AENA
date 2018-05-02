<?php

require_once ("aeropuertos.php");

class Nacionales extends Aeropuerto{

    var $numterminales;
    var $numpistas;

    function __construct($denominacioninternacional, $latitud, $longuitud, $numterminales, $numpistas){

        parent::__construct();

        $this->numterminales = $numterminales;

        $this->numpistas = $numpistas;

    }

    function getNumterminales(){

        return $this->numterminales;
    }


    function setNumterminales($numterminales){

        $this->numterminales = $numterminales;

    }

    function getNumpistas(){

        return $this->numpistas;
    }

    function setNumpistas($numpistas){

        $this->numpistas = $numpistas;
    }

    function mostrar(){

        parent:: mostar();

        echo "El numero de terminales es".getNumterminales();

        echo "<br>";

        echo " El numpero de pistas es".getNumpistas();

        echo "<br>";
    }
}