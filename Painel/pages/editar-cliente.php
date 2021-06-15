<?php
    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $cliente = Painel::select('estoque.cliente','id=?',array($id));
        
    }else{
        painel::alert('erro','Você precisar de passar um id válido!');
        die();
    }


?>

<div class="content-box">
<div class="content-plus" ><h2><i class="fas fa-user-edit"></i>Editar Cliente<h2></div><!--content-title-->
<div class="content-plus2">  


    <form method="POST">
        
        <?php
            if(isset($_POST['acao']) && $_POST['editar-cliente'] == 'form-edit'){
                $nome = $_POST['nome'];
                $cpf = $_POST['cpf'];
                $endereco = $_POST['endereco'];
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];
                $id = (int)$_GET['id'];
                if($nome == ''){
                    Painel::alert('erro','Campo de texto NOME ficou vazio');
                }else if($cpf == ''){
                    Painel::alert('erro','Campo de texto CPF ficou vazio');
                }else if($endereco == ''){
                    Painel::alert('erro','Campo de texto ENDEREÇO ficou vazio');
                }else if($telefone == ''){
                    Painel::alert('erro','Campo de texto TELEFONE ficou vazio');
                }else if($email == ''){
                    Painel::alert('erro','Campo de texto EMAIL ficou vazio');
                }else{
                    Clientes::clienteUpdate($nome,$cpf,$endereco,$telefone,$email,$id);
                    $cliente = Painel::select('estoque.cliente','id=?',array($id));
                    Painel::alert('sucesso','Cliente '.$nome.' Atualizado com sucesso');
                }
            }
        
        
        ?>


        <label>Nome</label>
        <div><input type="text" name="nome" value="<?php echo $cliente['nome']; ?>" placeholder="Nome do cliente"></div>
        <div><label>CPF / CNPJ</label></div>
        <div><input type="text" name="cpf" value="<?php echo $cliente['cpf']; ?>" placeholder="Digite o CPF ou CNPJ "></div>
        <div><label>Endereço e Numero</label></div>
        <div><input type="text" name="endereco" value="<?php echo $cliente['endereco']; ?>" placeholder="Endereço e numero do cliente"></div>
        <label>Telefone</label>
        <input type="tel" name="telefone" value="<?php echo $cliente['telefone']; ?>" placeholder="Telefone do cliente">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $cliente['email']; ?>" placeholder="Email do cliente">
        <div><input type="submit" name="acao" value="Atualizar"></div>
        <div><input type="hidden" name="editar-cliente" value="form-edit"></div>
    </form>
</div>
</div><!--content-box->

