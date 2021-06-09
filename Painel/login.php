<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login Estoque</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet">

</head>
<body>
    <div class="img-bg">

        <?php
            if(isset($_POST['acao']) && isset($_POST['login']) == 'estoque_login'){
            $user = $_POST['user'];
            $password = $_POST['password'];
            $sql = Mysql::connect()->prepare('SELECT * FROM `estoque.login` WHERE user=? AND password=?');
            $sql->execute(array($user,$password));
            if($sql->rowCount() == 1){
                $infor = $sql->fetch();
                $_SESSION['login'] = true;
                $_SESSION['user'] = $user;
                $_SESSION['password'] = $password;
                $_SESSION['nome'] = $infor['nome'];
                $_SESSION['cargo'] = $infor['cargo'];
                Painel::redirect(INCLUDE_PATH_PAINEL);
            }else{
                echo '<div style="text-align:center;" ><h1 style="background-color:red; color:white;" >usuario ou senha incorreto</h1></div>';
                }
            }

        ?>
    <div class="form_login">
        <form method="POST">
        <span class="span1"><i style="color:#20588f";  class="fas fa-user"></i> Usuario</span>
        <div><input type="text" name="user" placeholder="Digite seu Usuario" require></div>
        <br/>
        <span class="span1"><i style="color:#20588f"; class="fas fa-lock"></i> Senha</span>
       
        <div></<span><input type="password" name="password" placeholder="Digite sua Senha" require></div>
        <div><input type="submit" name="acao" value="Entrar" placeholder="Digite seu Usuario" require></div>
        <input type="hidden" name="login" value="estoque_login">
        </form>
    </div><!--form_login-->
    <div><!--img-bg-->
</body>
</html>