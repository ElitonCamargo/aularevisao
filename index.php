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
    <a href="?page=tabuada">Tabuada</a>
    <a href="?page=1">Página 1</a>
    <a href="?page=2">Página 2</a>
    <a href="?page=3">Página 3</a>

    <?php
        
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
                case 'tabuada':
                    require_once './page/tabuada.php';
                    break;
                default:
                    require_once './page/page404.php';
            }
        }
        else{
            require_once './page/page1.php';
        }
        
    ?>
</body>
</html>