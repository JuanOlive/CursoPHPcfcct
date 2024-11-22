<?php 
    include 'config.php';
    
    if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];
        $bairro = $_POST['bairro'];

        $conn->query("INSERT INTO clientes(nome, email, sexo, bairro) VALUES ('$nome', '$email', '$sexo', '$bairro')");
        header("Location: index.php");
        exit();
    }








?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Cliente</title>
    <link rel="stylesheet" href="./css/add-style.css">
    <script src="js/script.js"></script>
    <style>

        
    </style>
</head>
<body>
    <h1>Adicionar Novo Cliente</h1>
    <form action="" method="post" onsubmit="return validarFormulario()">

    <label>Nome: <input type="text" name="nome" required>     </label><br>
    <label>Email: <input type="email" name="email" required>     </label><br>
    <label>Sexo: 
        <select name="sexo" required>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select></label><br>

        <label>Bairro: <input type="text" name="bairro" required>     </label><br>

        <button type="submit">salvar</button>
    </form>
</body>
</html>