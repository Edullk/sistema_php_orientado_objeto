<?php
include_once 'Conecta.php';

class Login extends Conecta {
    
    //atributos
    private $id;
    private $nome_completo;
    private $usuario;
    private $senha;
    
    function getId() {
        return $this->id;
    }

    function getNome_completo() {
        return $this->nome_completo;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setNome_completo($nome_completo): void {
        $this->nome_completo = $nome_completo;
    }

    function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    function setSenha($senha): void {
        $this->senha = $senha;
    }


}
