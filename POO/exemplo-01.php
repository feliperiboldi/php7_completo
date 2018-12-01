<?php 

class Pessoa {

	public $nome; // Atributo

	public function falar() { // Método

		return "O meu nome é ".$this->nome;

	}

}

$felipe = new Pessoa();
$felipe->nome = "Felipe Riboldi";
echo $felipe->falar();

 ?>