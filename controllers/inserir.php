<?php

include_once '../loader/autoload.php';

//instancia o objeto 

$p = new Pessoa();
$pDAO = new PessoaDAO();

//pega os valores dos campos com o metodo filter input()
$nome = filter_input(INPUT_POST, "nome");
$sobrenome = filter_input(INPUT_POST, "sobrenome");
$data_nascimento = filter_input(INPUT_POST, "data");
$genero = filter_input(INPUT_POST, "genero");
$estado_civil = filter_input(INPUT_POST, "ec");

//passando valores para os atributos do objetos $p 

$p->setNome($nome);
$p->setSobrenome($sobrenome);
$p->setData_nascimento($data_nascimento);
$p->setGenero($genero);
$p->setEstado_civil($estado_civil);


//verefica ser o merodo enserir returna true
//recuperando valores dos atributos 

if ($pDAO->inserir($p)) {
    print" <script> alert('Registro inserido com sucesso');location='../views/form_inserir.php' </script> <br/>";
} else {
    print "errro ao inserir registro <br/>";
}

