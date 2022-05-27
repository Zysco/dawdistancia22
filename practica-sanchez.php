<?php
/**
  *  @author Francisco Sánchez Valiente
  *  @version 1.0
*/

  /** 
    * @internal 
    * 
    * BLOQUE - SOLO VISIBLE PARA DESARROLLADOR 
  */ 

  /**
    * Función multiplica de dos números
    * @param int $num1
    * @param int $num2
    * @return float
  */

  function multiplica ($num1, $num2) {
      $resultadomultiplicacion = $num1 * $num2;
      return  'Resultado de la multipliacion: ' . $resultadomultiplicacion;

  }

 
  /**
    * Función resta de dos números
    * @param int $num1
    * @param int $num2
    * @return float
    * {@internal EN LINEA - SOLO VISIBLE PARA DESARROLLADOR }}
  */

  function resta ($num1, $num2) {
      $resultadoresta = $num1 - $num2;
      return  'Resultado de la resta: '. $resultadoresta;

  }
  
$suma = multiplica (24,12);
echo $suma;
echo "\n";
$resta = resta (10,7);
echo $resta;
?>
