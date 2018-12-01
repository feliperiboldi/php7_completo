<?php 

require_once("config.php");
// Carrega um usuário
// $root = new Usuario();
// $root->loadById(4);
// echo $root;

// Carrega uma Lista
// $lista = Usuario:: gerList();
// echo json_encode($lista);

// Carrega uma Lista de Usuários Buscando pelo login
// $search = Usuario:: search('jo');
// echo json_encode($search);

// Carrega um usuário usando login e a senha
// $usuario = new Usuario();
// $usuario->login("joao", "1234567890");
// echo json_encode($usuário);

// Inserir Usuário
$aluno = new Usuario();
$aluno->setDeslogin("aluno");;
$aluno->setDessenha("@lun0");

$aluno->insert();

echo json_encode($aluno);

 ?>