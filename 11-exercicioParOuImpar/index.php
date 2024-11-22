<?php
// Verifica se o formulário foi enviado e se o campo 'numero' foi preenchido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero'])) {
    $numero = $_POST['numero'];

    // Verifica se o número é ímpar ou par
    if ($numero % 2 != 0) {
        $resultado = "O número $numero é ímpar.";
    } else {
        $resultado = "O número $numero é par.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Par ou Ímpar</title>
    <style>
        /* Estilos CSS para a página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
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

        input[type="text"] {
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
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Verifique se o número é ímpar ou par</h1>

    <!-- Formulário HTML -->
    <form method="POST" action="">
        <input type="number" id="numero" name="numero" placeholder="Digite um número" required>
        <br>
        <button type="submit">Verificar</button>
    </form>

    <!-- Exibe o resultado após o envio -->
    <?php
    if (isset($resultado)) {
        echo "<p>$resultado</p>";
    }
    ?>
</div>

</body>
</html>
