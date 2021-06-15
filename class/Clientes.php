<?php

    class Clientes{

        public static function clienteInsert($nome,$cpf,$endereco,$telefone,$email){
            $cliente = Mysql::connect()->prepare("INSERT INTO `estoque.cliente` VALUES (null,?,?,?,?,?)");
            $cliente->execute(array($nome,$cpf,$endereco,$telefone,$email,));
        }

        public static function clienteUpdate($nome,$cpf,$endereco,$telefone,$email,$id){
            $cliente = Mysql::connect()->prepare("UPDATE `estoque.cliente` SET 
            nome=?,cpf=?,endereco=?,telefone=?,email=? WHERE id=?");
            $cliente->execute(array($nome,$cpf,$endereco,$telefone,$email,$id));
        }
    }

?>