<?php

require_once("config.php");

// dar um select na tv usuarios e retornar na tela
//$sql = new sql();
//$usuarios = $sql->select("SELECT * from tb_usuarios");
//echo json_encode($usuarios);


$user = new Usuario();

$user->loadById(1);

echo $user;




?>