<?php echo permicaoPagina('2'); ?>

<div class="content-box">
    <div class="content-plus" ><h2><i class="fas fa-user-plus"></i> Incluir Usuário<h2></div><!--content-title-->
    <div class="content-plus2">  


        <form method="POST">
            <?php
                if(isset($_POST['cadastrar']) && $_POST['cadastrar'] == 'cadastrar-form'){
                    $nome = $_POST['nome'];
                    $user = $_POST['user'];
                    $senha = $_POST['password'];
                    $cargo = $_POST['cargo'];
                    if($user == ''){
                        Painel::alert('erro','Campo de texto user ficou vazio');
                    }else if($nome == ''){
                        Painel::alert('erro','Campo de texto nome para login ficou vazio');
                    }else if($senha == ''){
                        Painel::alert('erro','Campo de texto senha ficou vazio');
                    }else if($cargo == ''){
                        Painel::alert('erro','O cargo pecisa está selecionado!');
                    }else{ 
                        if($cargo >= $_SESSION['cargo']){
                            Painel::alert('erro',' Você precisa selecionar um cargo menor que o seu.');
                        }else if(Usuario::existsLogin($user)){
                            Painel::alert('erro','O login digitado já existe, selecione outro por favor!');
                        }else{
                            Usuario::userInsert($user,$senha,$nome,$cargo);
                            Painel::alert('sucesso','Usuario '.$nome.' Cadastrado com sucesso');  
                        }
                    }
                }   
             //fazer verificação de permissão.
            ?>
            <label>Nome</label>
            <div><input type="text" name="nome"  placeholder="Nome do Usuário"></div>
            <div><label>Nome para login</label></div>
            <div><input type="text" name="user"  placeholder="Nome para login"></div>
            <div><label>Senha</label></div>
            <div><input type="password" name="password"   placeholder="Senha do usuário"></div>
            <div><label>Cargo</label></div>
            <div><select style="outline:0;font-size:17px;" name="cargo" >
                <?php
                    foreach(Painel::$cargo as $key => $value){
                        echo '<option value="'.$key.'">'.$value.'</option>';
                    }
                ?>
            </select></div>
            <div><input type="submit" name="cadastrar" value="Cadastrar"></div>
            <div><input type="hidden" name="cadastrar" value="cadastrar-form"></div>
        </form>
    </div>
</div><!--content-box->