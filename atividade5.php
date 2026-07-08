<?php
function analisarTexto($texto){
$quantidadePalavras=str_word_count($texto);
$quantiddeCaracter= strlen($texto);
$textoMinusculo=strtolower($texto);

$quantidadeVogais= 0;
$quantidadeConsoantes=0;
$vogais="a,e,i,o,u";
for()
}
$texto_usuario = "estudar php todos os dias, não me ajuda para o vestibular!";

$resultado = analisartexto($texto_usuario);

echo $resultado['palavras']