<?php 
    include_once('../config.php');
    ob_start();
    if(Painel::logado() == false){
        include_once('login.php');
    }else{
        include_once('main.php');
    }

    ob_end_flush();
?>
