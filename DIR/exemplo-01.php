<?php 

$name = "images";

if(!is_dir($name)) {

	mkdir($name);
	echo "Diretório $name foi criado com sucesso!";

} else {

	rmdir($name);
	echo "Já existe o diretório: $name foi removido";

}

 ?>