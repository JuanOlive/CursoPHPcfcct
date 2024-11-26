<?php
$resultado = null;


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero1']) && isset($_POST['numero2'])) {
    
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];


    $resultado = $numero1 + $numero2;

    
    
}



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Ifinita</title>
</head>
<body>
    <form action="" method="post">

        <h1>Calculadora Ifinita</h1>

        <label for="numero1">Digite o primeiro numero</label>
        <input type="number" name="numero1" id="numero1"> <br><br>

        <label for="numero2">Digite o segundo numero</label>
        <input type="number" name="numero2" id="numero2">

        <button type="submit">Calcule e entre em um loop</button>

        <button onclick="$parar = false">Parar</button>


    </form>

<?php

$parar = true;

while ($parar) {
    echo $resultado;
}



?>
</body>
</html>