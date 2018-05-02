<?php

require_once ("aeropuertos.php");

class Vuelo {

    var $numero;
    var $origen;
    var $destino;
    var $fecha;
    var $hora;

    function __construct($numero, $origen, $destino, $fecha, $hora){

    $this->numero = $numero;
    $this->origen = $origen;
    $this->destino = $destino;
    $this->fecha = $fecha;
    $this->hora = $hora;

    }


    function getNumero(){

        return $this->numero;
    }

    function setnumero ($numero){
        $this->numero = $numero;
    }

    function getOrigen(){

        return $this->origen;
    }

    function setOrigen($origen){

        $this->origen = $origen;
    }

    function getDestino(){

        return $this->destino;
    }

    function setDestino($destino){

        $this->destino = $destino;
    }

    function getFecha(){

        return $this->fecha;
    }

    function setFecha($fecha){

        $this->fecha = $fecha;
    }

    function getHora(){

        return $this->hora;
    }

    function setHora($hora){

        $this->hora = $hora;
    }

    function mostar(){

        echo "Numero de vuelo".$this->getNumero();

        echo "<br>";

        echo "origen".$this->getOrigen();

        echo "<br>";

        echo "destino".$this->getDestino();

        echo "<br>";

        echo "fecha de salida".$this->getFecha();

        echo "<br>";

        echo "hora de salida".$this->getHora();

        echo "<br>";
    }


    




}
