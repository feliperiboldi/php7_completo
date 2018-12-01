<?php

function __autoload($nomeClasse) { // Função Depreciada no PHP 7.2

	var_dump($nomeClasse);

	require_once "$nomeClasse.php";

}

$carro = new DelRey();

$carro->acelerar(80);

 ?>