<?php

    class Painel{
       public static function logado(){
           if(isset($_SESSION['login'])){
                return true;
           }else{
               return false;
           }
        }

        public static function redirect($url){
            echo'<script>location.href="'.$url.'"</script>';
            die();
        }

        public static function logout(){
            session_destroy();
            Painel::redirect(INCLUDE_PATH_PAINEL);
        }

        public static function autoLoadPages(){

            if(isset($_GET['url'])){
                $url = explode('/',$_GET['url']);
                if(file_exists('pages/'.$url[0].'.php')){
                    include('pages/'.$url[0].'.php');
                }else{
                    header('location: '.INCLUDE_PATH_PAINEL);
                }
            }else{
                include('pages/home.php');
            }
        }

        public static $cargo = [
            '0'=>'normal',
            '1'=>'Sub Administrador',
            '2'=>'Administrador'];

        public static function pegarCargos($indice){
            return Painel::$cargo[$indice];
        }

        public static function alert($tipo,$mensagem){
            if($tipo == 'erro'){
                echo '<div class="erro"><i style="font-size:22px;" class="far fa-times-circle"></i> '.$mensagem.'</div>' ;
                return false;
            }else if($tipo == 'sucesso'){
                echo '<div class="sucesso"><i style="font-size:22px;" class="far fa-check-circle"></i> '.$mensagem.'</div>' ;
                return true;
            }
        }

        public static function delete($tabela,$id=false){
           if($id == false){
                $delete = Mysql::connect()->prepare("DELETE FROM `$tabela`");
           }else{
            $delete = Mysql::connect()->prepare("DELETE FROM `$tabela` WHERE $id = id");
           }
            $delete->execute();
        }

       
    }

?>