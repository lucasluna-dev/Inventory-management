<?php
    if(isset($_GET['delete'])){
        $idDelete = intval($_GET['delete']);
        Painel::delete('estoque.cliente',$idDelete);
        Painel::redirect(INCLUDE_PATH_PAINEL.'listar-clientes');
    }
?>
<?php
    $puxarCliente = Mysql::connect()->prepare("SELECT * FROM `estoque.cliente`");
    $puxarCliente->execute();
    $puxarCliente = $puxarCliente->fetchAll();
?>

<div class="content-box">
    <div class="content-plus" ><h2><i class="fas fa-user"></i> Usuários do Painel<h2></div><!--content-title-->
    <div style="margin-top:20px;" class="search">
  
        <form class="search"  method="POST">
        
            <label style="font-size:19px;" >Digite Nome e Sobrenome do Cliente</label></br><hr>
            <span class="pesquisar"><i class="fas fa-search"></i> Pesquisar</span><input  type="text" name="cliente" placeholder="Insira o nome do cliente ou CPF">
            <input style="cursor:pointer;" type="submit" name="action" value="Buscar">
        </form>


                <?php
                    if(isset($_POST['action'])){
                        $pesquisar = $_POST['cliente'];
                        $sql = Mysql::connect()->prepare("SELECT * From `estoque.cliente` WHERE nome  LIKE '%$pesquisar%' ORDER BY nome ASC");
                        $sql->execute();
                        $nomes =  $sql->fetchAll();
                        
                        foreach($nomes as $key => $value){
                            
                    }
                    
                ?> 
                    <table>
                    <td><a title="Editar" href="<?php echo INCLUDE_PATH_PAINEL?>editar-cliente?id=<?php echo $value['id']?>"><i style="color:green;" class="fas fa-user-edit"></i></a>  |  <a title="Exluir" href="<?php echo INCLUDE_PATH_PAINEL;?>listar-clientes?delete=<?php echo $value['id']?>"><i style="color:red; " class="fas fa-trash-alt"></i></a> <br> <?php echo $value['nome']; ?> </br>Telefone: <?php echo $value['telefone'];?></td>
                    <td><?php echo $value['cpf'];?></td>
                    <td><?php echo $value['endereco'];?></td>
                    <td><?php echo $value['email'];?></td>
                    
                    </table>
                <?php } ?>

    <div><!--search-->

    <div class="content-plus3">  
    <table style="width:100%;  text-align:center;">
        <tr>
            <th>Nome / Telefone</th>
            <th>CPF</th>
            <th>Endereço</th>
            <th>Email</th>
        </tr>
        <?php foreach($puxarCliente as $key => $value){ ?>
        <tr>
                

            <td><a title="Editar" href="<?php echo INCLUDE_PATH_PAINEL?>editar-cliente?id=<?php echo $value['id']?>"><i style="color:green;" class="fas fa-user-edit"></i></a>  |  <a title="Exluir" href="<?php echo INCLUDE_PATH_PAINEL;?>listar-clientes?delete=<?php echo $value['id']?>"><i style="color:red; " class="fas fa-trash-alt"></i></a> <br> <?php echo $value['nome']; ?> </br>Telefone: <?php echo $value['telefone'];?></td>
            <td><?php echo $value['cpf'];?></td>
            <td><?php echo $value['endereco'];?></td>
            <td><?php echo $value['email'];?></td>
        </tr>
       <?php } ?>
    </table>

    </div><!--content-plus2-->
</div><!--content-box->