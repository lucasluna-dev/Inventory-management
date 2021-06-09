<?php
    session_start();
    date_default_timezone_set('America/Sao_Paulo');
    $PagesLoads = function($class){
        include_once('class/'.$class.'.php');
    };
    spl_autoload_register($PagesLoads);

    define('HOST','localhost');
    define('DATABASE','estoque');
    define('USER','root');
    define('PASSWORD','');
    
    define('INCLUDE_PATH','http://localhost/NewEstoque/');
    define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'Painel/');

    function activeBackground($par){
        $url = explode('/',@$_GET['url'])[0];
        if($url == $par){
            echo 'class="active-link"';
        }
    }

    function permicaoMenu($verificar){
        if($_SESSION['cargo'] >= $verificar){
            return;
        }else{
            echo '<div  style="display:none;"></div>';
        }
    }

    function permicaoPagina($verify){
        if($_SESSION['cargo'] >= $verify){
            return;
        }else{
           include_once('painel/pages/acesso-negado.php');
           die();
        }
    }   


/* proteção contra cadastro de um usuario não existente
if(Painel::logado() == false){
    die("Você não está logado!");
}
*/  
?>