<?php
function foo($arg_1, $arg_2, /* ..., */ $arg_n)
{
    echo "Función de ejemplo.\n";
    return $valor_devuelto;
}

//a y b son parametros
function suma($a,$b){
  
}

//Funcion con retorno
function suma($a,$b){
  return 'sii';
}
//Funcion con retorno de valor con afecto a parametro
function suma2($a,$b){
  return ($a + $b);
}

//funcion con uso de variable externa  
$a = 3;

function externa(){
  return 4*$a;
}
?>
