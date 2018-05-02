<?php

require_once ("agencia.php");

$agen1 = new Agencia ("AENA");

$a = new Empleado ("Vanesa", 26-06-1993, 28);
$agen1->altaEmpleado($a);
$b = new Empleado ("Minerva", 26-06-1993, 15);
$agen1->altaEmpleado($b);
$c = new Empleado ("Jesus", 07-02-2000, 45);
$agen1->altaEmpleado($c);
$d = new Empleado ("Ana", 05-12-1982, 29);
$agen1->altaEmpleado($d);


echo "<pre>";

print_r ($agen1);

echo "</pre>";