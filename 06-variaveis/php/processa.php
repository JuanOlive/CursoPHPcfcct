<?php
//Usando variavel do tipo boolean(false e true)
$logado = true;

if ($logado) {
    echo 'Bem-vindo ao painel de controle.';

} else {
    echo "Você não está logado. Faça login!";
}
//==============================================

echo "<hr>";
// ponto flutuante:
$altura = 1.84;
echo "altura : $altura m "; //Saida: altura 1.85
// Integer
$idade = 17;
echo "Idade : $idade";

//==============================================
echo "<hr>";
//Array:
$filhos = [ "João", "Maria", "Pedro", "Ana",];
echo $filhos[1]


?>