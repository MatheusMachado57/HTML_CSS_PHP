<!DOCTYPE html>
<html lang = "pt-BR">

<body style="background-color:white;"></body>

<h1>Atividade</h1>

<body>
<p>
Neste artigo, mostro alguns exercícios com as suas devidas soluções. 
<br>
Vale ressaltar que alguns exercícios foram tirados de listas universitárias, sendo assim, 
provavelmente você verá o mesmo enunciado aqui em outros enunciados.
</p>

<p>
Não utilize essa lista apenas para fazer as entregas dos seus trabalhos, 
use para aprender mais e entender os problemas propostos.
</p>

<p>
1) Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. 
<br>A saída deve ser: 
<br>"Valor Positivo", "Valor Negativo" ou "Igual a Zero".
</p>

<?php
function teste($a) {
         if($a>0){ 
            echo $a.": maior que 0. <br>";
         }else{ 
         if($a<0){ 
            echo $a.": menor que 0. <br>";
            echo "<br>";
         }else{ 
             echo $a.": igual a 0. <br>";
         }}}
;
teste(10);
teste(0);
teste(-5);

###############################################################################################
###############################################################################################
# Resposta dada

$val = -69; //Valor de entrada
$resultado = "";

if($val > 0){
  $resultado = "Valor Positivo";
}elseif($val < 0){
  $resultado = "Valor Negativo";
}else{
  $resultado = "Igual a Zero";
}

echo $resultado;
?>

<p>
2) Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex: 
<br>
Entrada = 4
<br>
Saída = 4 X 0 = 0...4 X 10 = 40.
</p>

<?php
function Tabuada($b){
         echo $b*0 ."<br>";
         echo $b*1 ."<br>";
         echo $b*2 ."<br>";
         echo $b*3 ."<br>";
         echo $b*4 ."<br>";
         echo $b*5 ."<br>";
         echo $b*6 ."<br>";
         echo $b*7 ."<br>";
         echo $b*8 ."<br>";
         echo $b*9 ."<br>";
         echo $b*10 ."<br>";
};
Tabuada(3);
echo "<br>";
###############################################################################################
###############################################################################################
# Resposta dada

$num = 9;
  for($i = 0; $i <= 10; $i++){
    echo "{$num} * {$i} = " . ($num * $i) . "<br>";
  }

?>

<p>
3) Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela. 
<br>Ex: Entrada = 3 
<br>Processamento: (3 * 2) * 1 
<br>Saída: 6
</p>

<?php
function Factorial($c){
         if($c == 1){return $c;
         }else{
         return $c*Factorial($c-1);}
};

echo Factorial(4)."<br>";

###############################################################################################
###############################################################################################
# Resposta dada

$num = 8;
  if($num > 0){
    $valor = $num;
    for($i = ($valor - 1); $i > 0; $i--){
      $valor = $valor * $i;
    }
  }else{
    $valor = 0;
  }

  echo "{$num}! = {$valor}";
?>

<p>
4) Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). 
<br>
Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números. 
</p>

<?php
###############################################################################################
###############################################################################################
# Resposta dada

$num01 = filter_input(INPUT_POST, "txtNumero1");
$num02 = filter_input(INPUT_POST, "txtNumero2");
$opera = filter_input(INPUT_POST, "slOperacao");
$resul = "";

if($num01  && $num02){
  switch($opera){
    case "+":
      $resul = ($num01 + $num02);
    break;
    case "-":
      $resul = ($num01 - $num02);
    break;
    case "*":
      $resul = ($num01 * $num02);
    break;
    case "/":
      $resul = ($num01 / $num02);
    break;
  }
}
?>

<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Operações</title>
     <style>
      input, select{padding:10px; margin: 5px;}
     </style>
   </head>
   <body>
     <form method="post">
       <label>Número 1: <input type="text" name="txtNumero1"/></label><br>
       <label>Número 2: <input type="text" name="txtNumero2"/></label><br>
       <label>Operação:
         <select name="slOperacao">
           <option value="+">Adição</option>
           <option value="-">Subtração</option>
           <option value="*">Multiplicação</option>
           <option value="/">Divisão</option>
         </select>
       </label><br>
       <input type="submit" name="btnCalcular" value="Calcular">
     </form>
     <h1><?=$resul;?></h1>
   </body>
</html>

<p>
5) Solicite a entrada de um número e descubra se um número digitado é par ou ímpar. 
</p>

<?php
function div2($e){
         echo $e;
         if($e%2 == 0){echo ": Par<br>";
         }else{echo ": Impar<br>";}
}
div2(5);
div2(10);
?>

<p>
6) Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores. 
<br>
Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5".
</p>

<?php
function Ordem($f1,$f2){
         if($f1 > $f2){echo $f2." ".$f1;
         }else{echo $f1." ".$f2;}       
}
Ordem(25, 10);
echo "<br>";
Ordem(10, 42);
?>

<p>
7) Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. 
<br>
A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.
</p>

<?php
?>

<p>
8) Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e 
<br>
as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba aprovado, 
<br>
caso contrário, exiba reprovado. Exiba também a média final calculada.
<br>
Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado]
</p>

<?php
function MFinal($N1,$N2,$N3){
         $NF = ($N1 + $N2 + $N3)/3;
         if($NF >= 6){echo $NF.": Aprovado";
         }else{echo $NF.": Reprovado";}}
         
MFinal(6,5,4);
echo "<br>";
MFinal(7,6,5)
?>

<p>
9) Crie um algoritmo que pergunte ao usuário seu nome e sua idade. 
<br>
Em seguida verifique se a idade é maior ou menor que 18, exiba da seguinte forma: 
<br>
Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos.
</p>

<?php

?>

<p>
10) Ler um número inteiro entre 1 e 12 e escrever o mês correspondente.
<br> 
Caso o número seja fora desse intervalo, 
informar que não existe mês com este número.
</p>

<?php
  $mes = [
  "Janeiro", "Fevereiro",
  "Março", "Abril",
  "Maio", "Junho",
  "Julho", "Agosto",
  "Setembro", "Outubro",
  "Novembro", "Dezembro"];

  $numMes = 8;

  if($numMes >=1 && $numMes <=12){
    echo $mes[$numMes - 1];
  }else{
    echo "Mês inválido";
  }
 ?>

</body>