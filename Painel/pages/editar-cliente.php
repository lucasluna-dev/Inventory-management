<?php
    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        Painel::select('estoque.cliente','id=?',array($id));
        
    }else{
        painel::alert('erro','Você precisar de passar um id válido!');
        die();
    }


?>

<div class="content-box">
<div class="content-plus" ><h2><i class="fas fa-user-edit"></i>Editar Cliente<h2></div><!--content-title-->
<div class="content-plus2">  


    <form method="POST">
        
        <?php?>


        <label>Nome</label>
        <div><input type="text" name="nome" placeholder="Nome do cliente"></div>
        <div><label>CPF / CNPJ</label></div>
        <div><input type="text" name="cpf" placeholder="Digite o CPF ou CNPJ "></div>
        <div><label>Endereço e Numero</label></div>
        <div><input type="text" name="endereco" placeholder="Endereço e numero do cliente"></div>
        <label>Telefone</label>
        <input type="tel" name="telefone" placeholder="Telefone do cliente">
        <label>Email</label>
        <input type="email" name="email" placeholder="Email do cliente">
        <div><input type="submit" name="cadastrar" value="Cadastrar"></div>
        <div><input type="hidden" name="cadastro-cliente" value="form-cliente"></div>
    </form>
</div>
</div><!--content-box->

