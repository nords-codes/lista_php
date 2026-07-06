<?php
function inverterTexto(){
    return strrev ("paralelepipedo");

}
$quantidade = mb_strlen("paralelepipedo", "UTF-8");

echo inverterTexto();
echo " tem entorno de", $quantidade;