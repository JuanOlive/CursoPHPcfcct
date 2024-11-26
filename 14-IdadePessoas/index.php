<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nomes'])) {
    $idades = [
        $_POST['idade1'],
        $_POST['idade2'],
        $_POST['idade3'],
        $_POST['idade4'],
        $_POST['idade5'] 
    ];     

    for ($i = 0; $i < count($idades); $i++) {
        $idade = $idades[$i];
        
        // Classificando cada idade
        if ($idade >= 0 && $idade <= 12) {
            $classificacao = "Criança";
            echo 'A idade'$classificacao 
        } elseif ($idade >= 13 && $idade <= 17) {
            $classificacao = "Adolescente";
        } elseif ($idade >= 18 && $idade <= 59) {
            $classificacao = "Adulto";
        } elseif ($idade >= 60) {
            $classificacao = "Idoso";
        } else {
            $classificacao = "Idade inválida";
        }


    
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificacao de idade</title>
</head>
<body>
    <form action="" method="post">
        <h1>Classifição de idade</h1>
        <label for="idade1">Idade 1</label>
        <input type="number" name="idade1" id="idade1"><br><br>
        
        <label for="idade2">Idade 2</label>
        <input type="number" name="idade2" id="idade2"><br><br>

        <label for="idade3">Idade 3</label>
        <input type="number" name="idade3" id="idade3"><br><br>

        <label for="idade4">Idade 4</label>
        <input type="number" name="idade4" id="idade4"><br><br>

        <label for="idade5">Idade 5</label>
        <input type="number" name="idade5" id="idade5"><br><br>

        <button type="submit">Classificar em ordem</button>

        </form>
    
    </body>
</html>
