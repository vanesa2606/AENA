<?php

class Aeropuerto{
    var $denominacioninternacional;
    var $latitud;
    var $longuitud;
    var $vuelos;
    var $pistas;
    var $tiendas;

    function __construct($denominacioninternacional, $latitud, $longuitud, $vuelos, $pistas, $tiendas){

        $this->denominacioninternacional = $denominacioninternacional;

        $this->latitud=$latitud;

        $this->longuitud=$longuitud;

        $this->vuelos = array();

        $this->pistas = array();

        $this->tiendas = array();

    }

    function getDenominacionnacional(){
        return $this->denominacioninternacional;
    }

    function setDenominacioninternacional($denominacioninternacional){

        $this->denominacioninternacional = $denominacioninternacional;
    }

    function getLatitud(){

        return $this->latitud;
    }

    function setLatitud($latitud){

        $this->latitud = $latitud;
    }

    function getLonguitud(){

        return $this->longuitud;
    }

    function setLonguitud($longuitud){

        $this->longuitud = $longuitud;
    }


    function mostrar(){

        echo "Aeropuerto".$this->getDenominacioninternacional();

        echo "<br>";

        echo "latitud".$this->getLatitud();

        echo "<br>";

        echo "longuitud".$this->getLonguitud();

        echo "<br>";
    }

    function altaVuelo($vuelo){

        $this->vuelos[] = $vuelo;
    }

    

    function altaPistas($pista){
        $this->pistas[] = $pista;
    }

    function bajaPistas($pista){

        $enc = false;

        for ($i = 0; $i<count($this->pistas) && ($enc == false); $i++){
            if ($this->pistas[$i] == $pista);
            $this->pistas[$i] = null;
            $enc = true;

        }

    }

    function altaTiendas($tienda){
        $this->tiendas[] = $tienda;
    }

    function bajaTiendas($tienda){

        $enc = false;

        for ($i = 0; $i<count($this->tiendas) && ($enc == false); $i++){
            if ($this->tiendas[$i] == $tienda);
            $this->tiendas[$i] = null;
            $enc = true;

        }

    }

    function altaAeronaves($aeronave){
        $this->aeronaves[] = $aeronave;
    }

    function bajaAeronaves($aeronave){

        $enc = false;

        for ($i = 0; $i<count($this->aeronaves) && ($enc == false); $i++){
            if ($this->aeronaves[$i] == $arenove);
            $this->aeronaves[$i] = null;
            $enc = true;

        }

    }

}   