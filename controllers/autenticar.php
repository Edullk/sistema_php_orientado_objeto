<?php
session_start();
//inclui as classes

include_once '../loader/autoload.php';

//instancia objetos 
$l = new Login();
$lDAO = new LoginDAO();

//pegaor os valores dos campso do formulario e armazena 
$usuario =  filter_input(INPUT_POST, "usuario");
$senha = filter_input(INPUT_POST, "senha");


//passar os valores para os atributos do objeto 

$l->setUsuario($usuario);
$l->setSenha($senha);

//verifica se o metodo logar retorna true 

if($lDAO->logar($l)){
    header("location:../views/principal.php");
}else{
   print "ERRO AO AUTENTICAR";
}