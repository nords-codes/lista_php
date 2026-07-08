<?php
function mascararCpf($Cpf){
$digitos= substr($Cpf, -4);
$mascara = str_repeat("*", strlen ($Cpf) -4); 
return $mascara. $digitos;
}

echo mascararCpf(91806530);