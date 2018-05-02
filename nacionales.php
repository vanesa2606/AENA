<?php

require_once ("aeropuertos.php");

class Nacionales extends Aeropuerto{

    function __construct($denominacioninternacional, $latitud, $longuitud){

        parent::__construct();

    }

    function mostrar(){

        parent:: mostar();
    }
}