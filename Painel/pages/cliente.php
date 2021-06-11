<div class="content-box">
    <div class="content-plus" ><h2><i class="fas fa-user-plus"></i>Cadastrar Cliente<h2></div><!--content-title-->
    <div class="content-plus2">  


        <form method="POST">
            <?php
                if(isset($_POST['cadastrar']) && $_POST['cadastro-cliente'] == 'form-cliente'){
                    $nome = $_POST['nome'];
                    $cpf = $_POST['cpf'];
                    $endereco = $_POST['endereco'];
                    $telefone = $_POST['telefone'];
                    $email = $_POST['email'];
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
                        Clientes::clienteInsert($nome,$cpf,$endereco,$telefone,$email);
                        Painel::alert('sucesso','Cliente '.$nome.' Cadastrado com sucesso');
                    }
                }
                
            ?>
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