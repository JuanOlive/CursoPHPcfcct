<?php
// Inicializando a variável de resultado
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtendo as notas do formulário
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    // Calculando a média
    $media = ($nota1 + $nota2 + $nota3) / 3;

    // Verificando se o aluno foi aprovado ou reprovado
    if ($media >= 7) {
        $resultado = "Aprovado com média: " . number_format($media, 2);
    } else {
        $resultado = "Reprovado com média: " . number_format($media, 2);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Aprovação Escolar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        input[type="number"] {
            padding: 10px;
            width: 80%;
            font-size: 16px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        p {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Sistema de Aprovação Escolar</h1>

    <!-- Formulário para inserir as notas -->
    <form method="POST" action="">
        <label for="nota1">Nota 1:</label><br>
        <input type="number" id="nota1" name="nota1" min="0" max="10" required><br>

        <label for="nota2">Nota 2:</label><br>
        <input type="number" id="nota2" name="nota2" min="0" max="10" required><br>

        <label for="nota3">Nota 3:</label><br>
        <input type="number" id="nota3" name="nota3" min="0" max="10" required><br>

        <button type="submit">Calcular Média</button>
    </form>

    <!-- Exibe o resultado -->
    <?php
    if ($resultado != "") {
        echo "<p>$resultado</p>";
    }
    ?>
</div>

</body>
</html>
