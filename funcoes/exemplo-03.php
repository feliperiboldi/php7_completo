<?php 

function ola($texto, $periodo = "Bom dia") {

	return "Olá $texto! $periodo <br/>";

}

echo ola("mundo");
echo ola("", "Boa noite");
echo ola("Felipe", "Boa tarde");
echo ola("Glaucio", "");

 ?>