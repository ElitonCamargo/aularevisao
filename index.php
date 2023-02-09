<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number"    name="tab">
        <input type="submit" value="Enviar">
    </form>
    <?php
        for($id = 0; $id <= $_POST['tab']; $id++){
            echo "<h1> $id * ".$_POST['tab']." = ".$_POST['tab'] * $id."</h1>";
        }
    ?>
</body>
</html>