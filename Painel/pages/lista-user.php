<?php echo permicaoPagina('2'); ?>
<?php
    if(isset($_GET['delete'])){
        $idDelete = intval($_GET['delete']);
        Painel::delete('estoque.login',$idDelete);
        Painel::redirect(INCLUDE_PATH_PAINEL.'lista-user');
    }
?>
<?php
    $puxarCargo = Mysql::connect()->prepare("SELECT * FROM `estoque.login`");
    $puxarCargo->execute();
    $puxarCargo = $puxarCargo->fetchAll();
?>

<div class="content-box">
    <div class="content-plus" ><h2><i class="fas fa-user"></i> Usuários do Painel<h2></div><!--content-title-->
    <div class="content-plus2">  
    <table style="width:100%;  text-align:center;">
        <tr>
            <th>Nome do usuário</th>
            <th>Cargo do usuário</th>
        </tr>
        <?php foreach($puxarCargo as $key => $value){ ?>
        <tr>
            <td><a title="Exluir" href="<?php echo INCLUDE_PATH_PAINEL;?>lista-user?delete=<?php echo $value['id']?>"><i style="color:red; " class="fas fa-trash-alt"></i></a>  <?php echo $value['nome']; ?></td>
            <td><?php echo Painel::pegarCargos($value['cargo']);?></td>
        </tr>
       <?php } ?>
    </table>

    </div><!--content-plus2-->
</div><!--content-box->