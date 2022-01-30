<?php

include_once 'Conecta.php';
class Pessoa extends Conecta {
    //atributos
    private $id;
    private $nome;
    private $sobrenome;
    private $genero;
    private $estado_civil;
    private $data_nascimento;


    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getGenero() {
        return $this->genero;
    }

    function getEstado_civil() {
        return $this->estado_civil;
    }

    function getData_nascimento() {
        return $this->data_nascimento;
    }

////////////////////////////////////////////////////////////

    function setId($id): void {
        $this->id = $id;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome): void {
        $this->sobrenome = $sobrenome;
    }

    function setGenero($genero): void {
        $this->genero = $genero;
    }

    function setEstado_civil($estado_civil): void {
        $this->estado_civil = $estado_civil;
    }

    function setData_nascimento($data_nascimento): void {
        $this->data_nascimento = $data_nascimento;
    }



    
}
