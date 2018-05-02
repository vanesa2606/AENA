<?php



require_once("altadireccion.php");

require_once("controladoraereo.php");

require_once("personaloperativo.php");

require_once("aeropuertos.php");

require_once("internacionales.php");

require_once("companiasaereas.php");

require_once("companiaalpha.php");

require_once("companiagamma.php");



class Agencia {

    var $nombre;

    var $empleados;

    var $aeropuertos;

    var $companiasaereas;



    function __construct ($nombre){

        $this->nombre = $nombre;

        $this->empleados = array();

        $this->aeropuertos = array();

        $this->companiasaereas = array();

    }



    function getNombre (){

        return $this->nombre;

    }



    function setNombre ($nombre){

        $this->nombre = $nombre;

    }

    function altaEmpleado ($empleado){

        if (count($this->empleados) == 0){

            $this->empleados[] = $empleado;

        }
        else{
        $enc = false;

            for ($i=0; $i <count($this->empleados) && ($enc = false); $i++) { 
            
                if ($this->empleados[$i] == null){
                $this->empleados[$i]->getEmpleado();
                $enc = true;
                }
            }
        }
        if ($enc = false){

            array_unshift($this->empleados, $empleado);
        }
    }
    function bajaEmpleado ($nombre){

        $enc = false;

        for ($i = 0; ($i < count($this->empleados)) && ($enc == false); $i++){

            if ($nombre == $this->empleados[$i]->setNombre()){

                $this->empleados[$i] = null;

                $enc = true;

            }
        }
    }

    function altaAeropuertos(){

        $this->aeropuertos[]=$aeropuertos;
    }

    function bajaAeropuertos($denominacioninternacional){

        $enc=false;

        for ($i=0; $i<count($this->aeropuertos)&&($enc==false);$i++){
            if ($this->aeropuertos[$i]->getDenominacioninternacionl == $denominacioninternacional){
                $this->aeropuertos[$i] = null;
                $enc = true;
            }
        }
    }

    function altaVuelo($denominacioninternacional){

        $pos = 0;
        $enc = false;

        for ($i = 0; $i<count($this->vuelos) && ($enc == false); $i++){
            if ($this->denominacioninternacion[$i] == $denominacioninternacional);
            $this->vuelos->altaVuelo();
            $pos = $i;
            $enc = true;
        }
    }

        function bajaVuelo($vuelo){

            $enc = false;
    
            for ($i = 0; $i<count($this->vuelos) && ($enc == false); $i++){
                if ($this->vuelos[$i] == $vuelo);
                $this->vuelos[$i] = null;
                $enc = true;
    
            }
    
        }
    
}
    
