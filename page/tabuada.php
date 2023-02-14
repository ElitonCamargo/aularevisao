<form method="post">
    <input type="number" name="input_tab" placeholder="Informe a tabuada desejada">
    <input type="submit" value="Gerar">
</form>
<h3></h3>

<?php
    if(isset($_POST['input_tab'])){
        $tab = $_POST['input_tab'];
            for($id = 0; $id < 11; $id++){
                $resultado = $id * $tab;
                echo"<h3>$id * $tab = $resultado</h3>";
            }
    }

?>