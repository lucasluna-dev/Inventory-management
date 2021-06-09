<div class="content-box">
    <div class="content-plus"><h2>
        <i class="fas fa-user-edit"></i> Editar Usuário<h2>
    </div><!--content-title-->
 <div class="content-plus2">  
      
        <form method="POST">
            <?php
                if(isset($_POST['salvar']) && $_POST['editar'] == 'editar-form'){
                    $user = $_POST['user'];
                    $nome = $_POST['nome'];
                    $senha = $_POST['senha'];
                  if(Usuario::userUpdate($user,$senha,$nome)){
                      $_SESSION['nome'] = $nome;
                      $_SESSION['user'] = $user;
                      $_SESSION['senha'] = $senha;
                      Painel::alert('sucesso','Usuario '.$nome.' atualizado com sucesso!');
                  }else{
                    Painel::alert('erro','Usuario não foi atualizado');
                  }
                
                }   
            
            ?>
            <label>Nome</label>
            <div><input type="text" name="nome" value="<?php echo $_SESSION['nome'];?>" placeholder="Nome do Usuario"></div>
            <div><label>Nome para login</label></div>
            <div><input type="text" name="user" value="<?php echo $_SESSION['user'];?>" placeholder="Nome para login"></div>
            <div><label>Senha</label></div>
            <div><input type="password" name="senha" value="<?php echo $_SESSION['password'];?>" placeholder="Senha do usuario"></div>
            <div><input type="submit" name="salvar" value="Salvar"></div>
            <div><input type="hidden" name="editar" value="editar-form"></div>
        </form>
    </div><!--content-plus2-->
</div><!--content-box->

