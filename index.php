<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/">Home</a>
    <a href="?page=1">Página 1</a>
    <a href="?page=2">Página 2</a>
    <a href="?page=3">Página 3</a>
    <!-- <form method="post">
        <input type="number"    name="tab" placeholder="tab">
        <input type="number"    name="inicio" placeholder="inicio">
        <input type="number"    name="fim" placeholder="fim">
        <input type="submit" value="Enviar">
    </form> -->
    <?php
        http://materialaulapw3.local/?page
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            switch($page){
                case '1':
                    require_once './page/page1.php';
                    break;
                case '2':
                    require_once './page/page2.php';
                    break;
                case '3':
                    require_once './page/page3.php';
                    break;
                default:
                    echo 'página não encontrada';
            }
        }
        else{
            echo 'Não foi';
        }
        var_dump($_GET);

        // for($id = 0; $id <= $_POST['tab']; $id++){
        //     echo "<h1> $id * ".$_POST['tab']." = ".$_POST['tab'] * $id."</h1>";
        // }
    ?>
</body>
</html>