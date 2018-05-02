<?php


class Companiasaereas{

    var $nombre;
    var $telefonoemergencia;
    var $aeronavesopertivas;

    function __construct($nombre, $telefonoemergencia){

        $this->nombre = $nombre;
        $this->telefeonoemergencia = $telefonoemergencia;
    }

    function getNombre(){

        return $this->nombre;
    }

    function setNombre($nombre){

        $this->nombre = $nombre;
    }

    function getTelefonoemergencia(){

        return $this->telefonoemergencia;
    }

    function setTelefonoemergencia($telefonoemergencia){

        $this->telefonoemergencia = $telefonoemergencia;
    }

    function getAeronavesoperativas(){

        return $this->aeronavesopertaivas;
    }

    function setAeronavesopertivas($aeronavesoperativas){

        $this->aeronavesoperativas = $aeronavesoperativas;
    }

    function mostrar(){

        echo "El nombre de la compañia".getNombre();

        echo "<br>";

        echo "Telefono de emergencias".getTelefonoemergencia();

        echo "<br>";
    }
}