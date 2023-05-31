<?php
/**
* Clase My_Calculadora
* Esta clase proporciona operaciones de cálculo.
*
* @package mi_proyecto
* @see Calculadora::sumar()
* @see Calculadora::restar()
* @see Calculadora::multiplicar()
* @see Calculadora::dividir()
* @author Profesor <prof@inst.org>
* @version 1.0
* @license Todos los derechos reservados 2023
*/

 namespace mi_proyecto;

/**
* Clase Calculadora
* Esta clase proporciona operaciones de cálculo.
*
* @package mi_proyecto2
* @see Calculadora::sumar()
* @see Calculadora::restar()
* @see Calculadora::multiplicar()
* @see Calculadora::dividir()
* @author Profesor <prof@inst.org>
* @version 2.0
* @license Todos los derechos reservados 2023
*/
 class Calculadora {

  /**
  * Suma dos números.
  * 
  * @param int $num1 el primer número.
  * @param int $num2 el segundo número-
  * @return int La suma de los dos números.
  * @see Calculadora::sumar()
  */
  public static function sumar($num1, $num2) {
    return $num1 + $num2;
  }
    /**
  * Resta dos números.
  * 
  * @param int $num1 el primer número.
  * @param int $num2 el segundo número-
  * @return int La diferecia entre de los dos números.
  * @see Calculadora::restar()
  */
  public static function restar($num1, $num2) {
    return $num1 - $num2;
  }
  /**
  * Multiplicar dos números.
  * 
  * @param int $num1 el primer número.
  * @param int $num2 el segundo número-
  * @return int El producto de los dos números.
  * @see Calculadora::multiplicar()
  */
  public static function multiplicar($num1, $num2) {
    return $num1 * $num2;
  }
  /**
  * Divide dos números.
  * 
  * @param int $num1 el primer número.
  * @param int $num2 el segundo número-
  * @return string|int El cociente de los dos números o un mensaje de erro si el divisor es cero.
  * @see Calculadora::dividir()
  */
  public static function dividir($num1, $num2) {
    if ($num2 == 0) {
      return "Error: No se puede dividir entre cero.";
    } else {
      return $num1 / $num2;
    }
  }
}
?>
