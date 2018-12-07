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

// Criando um novo usuário
// $aluno = new Usuario("aluno", "@lun0");
// $aluno->insert();
// echo $aluno;

// // Editando um usuário
$usuario = new Usuario();
$usuario->loadById(1);
$usuario->update("professor", "123");
echo $usuario;

 ?>