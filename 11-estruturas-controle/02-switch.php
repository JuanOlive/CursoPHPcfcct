<?php

$dia = 'adada';

switch ($dia) {
    case 'segunda':
        echo "Hoje é o primeiro dia útil da semana.";
        break;
    case 'terca':
        echo "Hoje é o terça-feira.";
        break;
    case 'quarta':
        echo "Hoje é o quartaa-feira.";
        break;
    case 'quinta':
        echo "Hoje é o quinta-feira.";
        break;
    case 'sexta':
        echo "Hoje é o sexta-feira.";
        break;
    case "sabado":
    case "domingo":
        echo "é fim de semana!";
        break;
    default:
    echo "Digite um dia válido!";
}