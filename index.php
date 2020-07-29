<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inverter Strig</h1>
    <form method="post">
        Palavra/Frase: <br>
        <input type="text" name="frase" id=""><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if(isset($_POST['frase']) && empty($_POST['frase']) == false){
            $frase = $_POST['frase'];
            echo "<br>".$frase."<br>";
            echo strrev($frase);
        }

    ?>
</body>
</html>