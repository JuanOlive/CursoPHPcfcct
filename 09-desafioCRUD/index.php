<?php
include 'config.php';

$result = $conn->query("SELECT * FROM clientes"); 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Clients - Padaria Toque de Arte:) </title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <img src="./css/image/logoTA.png" alt="">
  <a href="add.php">Criar Cliente</a>
  <table>
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Sexo</th>
      <th>Bairro</th>
      <th>Ações</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()):?>

    <tr>
      <td> <?= htmlspecialchars($row['nome']);?>  </td>
      <td> <?= htmlspecialchars($row['email']);?>  </td>
      <td> <?= htmlspecialchars($row['sexo']);?>  </td>
      <td> <?= htmlspecialchars($row['bairro']);?>  </td>
      <td>
        <a href="edit.php?id=<?= $row['id'];?>">Editar</a>
        <a href="delete.php?id=<?= $row['id'];?>" onclick="return confirm('Tem certeza que deseja apagar este cliente?')">Deletar</a>
      </td>
    </tr>
    <?php endwhile; ?>

  </table>


</body>
</html>