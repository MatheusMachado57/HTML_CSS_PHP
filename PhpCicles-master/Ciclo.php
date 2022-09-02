<!DOCTYPE html>
<html lang = "pt-BR">

<body style="background-color:white;"></body>

<h1>Ciclos</h1>

<body>

01 - Escreva um programa para imprimir os números inteiros entre 1 e 10 na mesma linha, 
primeiro em ordem crescente e depois em ordem decrescente.

<?php
for($i = 1; $i <=10 ; $i++){
    echo "<br>".$i;
}
for($i = 10; $i >0 ; $i--){
    echo "<br>".$i;
}
?>

02 - Escreva um programa que peça ao utilizador um nome e um número inteiro (entre 1 e 20). 
<br>
Deverá mostrar esse nome um número de vezes igual a esse valor inteiro.
<br>

<?php
echo "Digite seu nome: ";
$nome = fgets(STDIN);

echo "Digite um valor inteiro de entre 1 e 20: ";
$numero = fgets(STDIN);

for($i = 1; $i <= $numero; $i++){
    echo $nome;
}
?>

</body>