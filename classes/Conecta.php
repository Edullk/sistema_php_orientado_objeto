<?php

class Conecta {

    //atributo 
    private static $conn;

    //metodo que realiza a conexao e retorna essa conexao que foi realizada 
    private static function pegarConexao() {
        //verefica se o valor é nulo 
        if (self::$conn == null) {
            //tratamento de erro (exceção )
            try {
                self::$conn = new PDO("mysql:host=localhost;dbname=pdo_integrado", "root", "");
            } catch (Exception $ex) {
                print $ex->getMessage();
            }
        }
        return self::$conn;
    }

    //metodo que prepara o ssql na conexao retornada
    protected static function preparaSQL($sql) {
        return self::pegarConexao()->prepare($sql);
    }

}
