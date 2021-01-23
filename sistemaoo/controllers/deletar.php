<?php

//inclui as classes
include_once '../loader/autoload.php';

//instancia  objetos
$p = new Pessoa();
$pDAO = new PessoaDAO();

//PAGA O VLAOR DA PAAMETRO 'ID ' DA URL  

$id = filter_input(INPUT_GET, "id");

//passa valor do id para atributo 

$p->setId($id);

//verfica se o metodo excluir retorna true
if ($pDAO->excluir($p)) {
    print" <script> alert('Registro excludo com sucesso');location='../views/listar.php' </script> <br/>";
}else{
    print "erro ao  excluir registro";
}