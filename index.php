<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>             
        .flex { 
            display: flex; 
            justify-content: space-between; 
        } 
        .flex-items { 
            width: 30%; 
            height:50px; 
            margin: 10px; 
            text-align: center; 
        }
        a{
            margin-inline: 20px;
        }
    </style> 
</head>   
    <body>        
        
        <div class="flex"> 
        <div class="flex-items">
                <a href="#"> Aula 07/03/2023 </a>
                <a href="/">Home</a>
                <a href="?page=login">Login</a>
            </div>  
            <div class="flex-items">3</div> 
        </div> 
        <br> 

        <?php
            if(isset($_GET['page'])){
                $page = $_GET['page'];
                switch($page){
                    case 'home':
                        require_once './page/home.php';
                        break;
                    case 'login':
                        require_once './page/login.php';           
                        break;
                    default:
                        require_once './page/page404.php';
                }
            }
            else{
                require_once './page/home.php';
            }
        ?>
      
    </body> 
</html>     