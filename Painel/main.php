<?php
    if(isset($_GET['logout'])){
        Painel::logout();
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link href="<?php echo INCLUDE_PATH_PAINEL; ?>style/style.css" rel="stylesheet">
    <title>Painel Estoque</title>
</head>
<body class="body1">
   <header class="cabecalho">
        <div  class="bar"><i  class="fas fa-bars"></i> <i style="display:none;"  class="fas fa-times"></i></div>
        <p title="" style=" float:left;"><?php echo $_SESSION['nome']; ?> | <?php echo Painel::pegarCargos($_SESSION['cargo']);?></p>
        <a title="sair" href="<?php echo INCLUDE_PATH_PAINEL;?>?logout"><p style="color:white; float:right;"> Sair <i  class="fas fa-sign-out-alt"></i></p></a>
        <div class="clear"></div>
   </header><!--cabecalho-->
   
   <div class="menu">
     <div class="menu-wraper">
        <div  class="link"><a style="color:orange; padding-left:0; text-align:center;" href="<?php echo INCLUDE_PATH_PAINEL;?>home">Pagina home</a></div>
        <h3>Cadastros</h3>
        <div <?php echo activeBackground('cliente');?>class="link"><a href="<?php echo INCLUDE_PATH_PAINEL;?>cliente">Clientes</a></div>
        <div <?php echo activeBackground('pedidos');?>class="link"><a href="<?php echo INCLUDE_PATH_PAINEL;?>pedidos">Pedidos</a></div>
        <div <?php echo activeBackground('produto');?>class="link"><a href="<?php echo INCLUDE_PATH_PAINEL;?>produto">Produtos</a></div>
        <div <?php echo activeBackground('movimentacao');?>class="link"><a href="<?php echo INCLUDE_PATH_PAINEL;?>movimentacao">Movimentações</a></div>
        <h3>listas e Consultas</h3>
        <div  <?php echo activeBackground('listar-clientes');?> class="link"><a href="<?php echo INCLUDE_PATH_PAINEL;?>listar-clientes">Lista de Clientes</a></div>
        <div  <?php echo activeBackground('listar-vendas');?>class="link"><a href="<?php echo INCLUDE_PATH_PAINEL;?>listar-vendas">Vendas concluidas</a></div>
        <div  <?php echo activeBackground('estoque');?>class="link"><a href="<?php echo INCLUDE_PATH_PAINEL;?>estoque">Estoque da empresa</a></div>
        <h3>Administração do painel</h3>
        <div <?php echo activeBackground('editar-usuario');?>class="link"><a href="<?php echo INCLUDE_PATH_PAINEL;?>editar-usuario">Editar Usuário</a></div>
        <div <?php echo activeBackground('cadastrar-user');?>class="link"><a <?php echo permicaoMenu('2'); ?> href="<?php echo INCLUDE_PATH_PAINEL;?>cadastrar-user">Cadastrar Usuário</a></div>
        <div <?php echo activeBackground('lista-user');?>class="link"><a <?php echo permicaoMenu('2'); ?> href="<?php echo INCLUDE_PATH_PAINEL;?>lista-user">Lista de Usuários</a></div>   
    </div><!-menu-wraper-->
    </div><!--menu-->
    <div class="clear"></div>


    <div class="content">
        <?php Painel::autoLoadPages(); ?>
    <div><!-container-->

<script src="js/menus.js"></script>
<script src="js/main.js"></script>
</body>
</html>