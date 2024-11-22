<?php
// Inicializa a variável de número secreto
session_start();

// Se o número secreto não estiver na sessão, gera um novo número
if (!isset($_SESSION['numero_secreto'])) {
    $_SESSION['numero_secreto'] = rand(1, 100);
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['chute'])) {
    $chute = $_POST['chute'];
    $numero_secreto = $_SESSION['numero_secreto'];

    // Compara o chute com o número secreto
    if ($chute < $numero_secreto) {
        $mensagem = "O número secreto é maior! Tente novamente.";
    } elseif ($chute > $numero_secreto) {
        $mensagem = "O número secreto é menor! Tente novamente.";
    } else {
        $mensagem = "Parabéns! Você acertou o número secreto!";
        // Reinicia o jogo gerando um novo número secreto
        $_SESSION['numero_secreto'] = rand(1, 100);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo da Adivinhação</title>
    <style>
        /* Estilos CSS para a página */
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
    <h1>Jogo da Adivinhação</h1>

    <!-- Formulário para o chute do usuário -->
    <form method="POST" action="">
        <label for="chute">Digite um número entre 1 e 100:</label><br>
        <input type="number" id="chute" name="chute" min="1" max="100" required>
        <br>
        <button type="submit">Adivinhar</button>
    </form>

    <!-- Exibe a mensagem com o resultado -->
    <?php
    if (isset($mensagem)) {
        echo "<p>$mensagem</p>";
    }
    ?>
</div>

</body>
</html>
