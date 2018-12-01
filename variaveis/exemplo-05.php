<?php 

$nome = "Felipe";

function teste() {
	global $nome;
	echo $nome;

}

function teste2() {
	global $nome;
	echo " ".$nome ." "."Agora no teste 2";
}

teste();
teste2();

 ?>