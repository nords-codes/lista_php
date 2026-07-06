<?php
function calcularformula ($x,$y) {
    if($x + $y == 0) {
        return "não é possivel uma divisão por 0";
    }
   $resultado = (pow( $x, 2) + pow( $y, 2) / ($x + $y));

   return $resultado;
}

echo calcularformula(5,9);
