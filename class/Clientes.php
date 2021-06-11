<?php

    class Clientes{

        public static function clienteInsert($nome,$cpf,$endereco,$telefone,$email){
            $cliente = Mysql::connect()->prepare("INSERT INTO `estoque.cliente` VALUES (null,?,?,?,?,?)");
            $cliente->execute(array($nome,$cpf,$endereco,$telefone,$email,));
        }
    }

?>