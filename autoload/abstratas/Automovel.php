<?php 

abstract class Automovel implements Veiculo {

	public function acelerar($velocidade) 
	{

		echo "O veículo acelerou até ".$velocidade;

	}

	public function frenar($velocidade) 
	{

		echo "O veículo frenou até ".$velocidade;

	}

	public function trocarMarcha($marcha)
	{

		echo "O veículo engatou a marcha ".$marcha;

	}

}

 ?>