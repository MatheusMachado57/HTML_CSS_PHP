<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset    = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name       = "viewport"        content = "width=device-width, initial-scale=1.0">
    <link rel        = stylesheet        href = "style_3.css">
    <title> Document </title> 
</head>

<?php
$num01 = filter_input(INPUT_POST, "txtNumero1");
$num02 = filter_input(INPUT_POST, "txtNumero2");
$opera = filter_input(INPUT_POST, "slOperacao");
$resul = "";

if($num01  && $num02){
    switch($opera){
    case "+": $resul = ($num01 + $num02); break;
    case "-": $resul = ($num01 - $num02); break;
    case "*": $resul = ($num01 * $num02); break;
    case "/": $resul = ($num01 / $num02); break;}}
?>

<body>
<div class = "main">

<div class = left>

Nosso experimento consiste em ver como essa sistema funciona.
<br>
Escolha uma operacao e digite dois numeros:

</div>

<div class = "right">

<div class = "card">

<form method="post">
       <label>Número 1: <input type="text" name="txtNumero1"/></label><br>
       <br>
       <label>Número 2: <input type="text" name="txtNumero2"/></label><br>
       <br>
       <label>Operação:
         <select name    = "slOperacao">
           <option value = "+" > Adição        </option>
           <option value = "-" > Subtração     </option>
           <option value = "*" > Multiplicação </option>
           <option value = "/" > Divisão       </option>
         </select>
       </label><br>
       <br>
       <input type="submit" name="btnCalcular" value="Calcular">
</form>

<div class = "butom">
     <h1><?=$resul;?></h1>
</div>

</div>

</div>
</div>
</body>

</html>