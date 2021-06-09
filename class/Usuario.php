<?php

    class Usuario{

        public function existsLogin($login){
            $exists  = Mysql::connect()->prepare("SELECT 'id' FROM `estoque.login` WHERE user=?");
            $exists->execute(array($login));
            if($exists->rowCount() == 1 ){
                return true;
            }else{
                return false;
            }
        }


        public static function userInsert($user,$senha,$nome,$cargo){
            $insertUser = Mysql::connect()->prepare("INSERT INTO `estoque.login` VALUES (null,?,?,?,?)");
            $insertUser->execute(array($user,$senha,$nome,$cargo));
        }

        public static function userUpdate($user,$senha,$nome){
            $updateUser = Mysql::connect()->prepare("UPDATE `estoque.login` SET user=?,password=?,nome=? WHERE user=?");
            if($updateUser->execute(array($user,$senha,$nome,$_SESSION['user']))){
                return true;
            }else{
                return false;
            }
        }
    }

?>