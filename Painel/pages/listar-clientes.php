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
    <!--fazer o campo de pesquisa-->
    <div class="content-plus" ><h2><i class="fas fa-user"></i> Usuários do Painel<h2></div><!--content-title-->
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
            <td><a title="Exluir" href="<?php echo INCLUDE_PATH_PAINEL;?>listar-clientes?delete=<?php echo $value['id']?>"><i style="color:red; " class="fas fa-trash-alt"></i></a>  <?php echo $value['nome']; ?> </br> <?php echo $value['telefone'];?></td>
            <td><?php echo $value['cpf'];?></td>
            <td><?php echo $value['endereco'];?></td>
            <td><?php echo $value['email'];?></td>
        </tr>
       <?php } ?>
    </table>

    </div><!--content-plus2-->
</div><!--content-box->