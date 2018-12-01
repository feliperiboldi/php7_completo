<?php 

$pessoas = array();

array_push($pessoas, array(
	"nome" => "Felipe",
	"idade" => 19
));

array_push($pessoas, array(
	"nome" => "Glaucio",
	"idade" => 25
));

echo json_encode($pessoas);

 ?>