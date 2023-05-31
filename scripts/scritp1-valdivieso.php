<?php
/**
* Archivo Funciones
*
* Este script guarda las funciones matematicas de nuestra aplicacion
* @package funciones
* @access public
* @author Profesor <prof@insti.com>
* @version 2.0
* @see sumar()
* @see restar()
*/

/**
* Suma dos números.
*
* @param int $num1 el primer número.
* @param int $num2 el segundo número
* @return int la suma de los dos números.
*/
function sumar($num1, $num2) {
  return $num1 + $num2;
}
/**
* Resta dos números.
*
* @param int $num1 el primer número.
* @param int $num2 el segundo número
* @return int la diferencia entre los dos números.
*/
function restar($num1, $num2) {
  return $num1 - $num2;
}
/**
* Multiplica dos números.
*
* @param int $num1 el primer número.
* @param int $num2 el segundo número
* @return int el productos de los dos números.
*/
function multiplicar($num1, $num2) {
  return $num1 * $num2;
}
/**
* Divide dos números.
*
* @param int $num1 el primer número.
* @param int $num2 el segundo número
* @return string|int el coheficiente de los dos números o un mensaje de error si el divisor es cero..
*/
function dividir($num1, $num2) {
  if ($num2 == 0) {
    return "Error: No se puede dividir entre cero.";
  } else {
    return $num1 / $num2;
  }
}
?>
