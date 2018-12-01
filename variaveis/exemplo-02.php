<?php 

$anoNascimento = 1990;

/* $nomeCompleto = "";
Na linha de baixo temos uma variavél com número no nome */

$nome1 = "Felipe";
$sobrenome = "Riboldi";

$nomeCompleto = $nome1 .' '.$sobrenome;

echo $nomeCompleto;
exit;

echo $nome1;
echo "<br/>";

unset($nome1);

if(isset($nome1)) {
	echo $nome1;
}

/* Tipos Básicos de Variavéis em PHP
Inteiro, Ponto Flutuante, String e Booleano

Tipos Compostos
Array e Objeto

Dados Especiais
Resource, Null */

 ?>