<?php

require_once("config.php");

// dar um select na tb_usuarios e retornar na tela
//$sql = new sql();
//$usuarios = $sql->select("SELECT * from tb_usuarios");
//echo json_encode($usuarios);


//carrega um usuario pelo id
//$user = new Usuario();
//$user->loadById(1);
//echo $user;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("u");
//echo json_encode($search);


//Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("jheff", "7");
echo $usuario;

?>