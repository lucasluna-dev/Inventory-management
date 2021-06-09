<?php include_once('config.php') ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>New Estoque</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="<?php echo INCLUDE_PATH;?>css/styles.css" rel="stylesheet">
   
</head>
<body>
   

    <?PHP

        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        if(file_exists('pages/'.$url.'.php')){
            include_once('pages/'.$url.'.php');
        }else{
            include_once('pages/erro404.php');
            
        }
    
    ?>
<script src="script.js"></script>
</body>
</html>