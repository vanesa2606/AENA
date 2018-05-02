<?php

require_once ("aeropuertos.php");

class Tienda{

    var $nombre;
    var $numerodelocal;
    var $metroscuadrados;

    function __construct($nombre, $numerodelocal, $metroscuadrados){

    $this->nombre = $nombre;

    $this->numerodelocal = $numerodelocal;

    $this->metroscuadrados = $metroscuadrados;

    }

    function getNombre(){

        return $this->nombre;
    }

    function setNombre($nombre){

        $this->nombre = $nombre;
    }

    function getNumerodelocal(){

        return $this->numerodelocal;
    }

    function setNumerodelocal($numerodelocal){

        $this->numerodelocal;

    function getMetroscuadrados(){

        return $this->metroscuadrados;

    }

    function setMetroscuadrados($metroscuadrados){

        $this->metroscuadrados = $metroscuadrados;
    }

    function mostrar(){

        echo "El nombre del local es".getNombre();

        echo "<br>";

        echo "Numero de local".getNumerodelocal();

        echo "<br>";

        echo "metros cuadrados del loca".getMetroscuadrados();

        echo "<br>";

    }

    }
}
