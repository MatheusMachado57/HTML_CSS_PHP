<?php
$js = "<script>alert('Criado em PHP.')</script>";
?>

<?php
$x = 10;
$y = 5;
echo $x + $y + 3;

function teste(){
    ## A variavel Z so aparece do lado de dentro da function, a menos que seja declarado como global
    global $x, $y, $z;
    $z = $x + $y + 3;
    ## <br> significa break, e quebra a linha
    echo "<br> O valor de Z = $z";}
teste();

echo "<br> O valor de Z = $z";

$nome = "Matheus";
$sobrenome = "Machado";
echo "<br> O usuario se chama: $nome $sobrenome";
echo '<br> O usuario se chama: '.$nome.' '.$sobrenome;
print '<br>' .$nome." ".$sobrenome;
## o acho e mais rapido do que o print

$A = 100;
$B = 355;
echo '<br>'.$A * $B.'<br>';
var_dump($A);
?>

<!DOCTYPE html>
<html lang = "pt-BR">

<body style="background-color:powderblue;"></body>

<body>
<?php $ativado = "sim"; ?>
<?php if ($ativado == "sim"){ ?>
      <h1> Yes </h1>
<?php }else{ ?>
      <h1> No </h1>
<?php } ?>
</body>

<?php echo $js ?>;

<?php
//O que for rodado aqui dentro sera codigo PHP

/*
Tudo oq estuver aqui dentro esta comentado
*/

echo"<p> Oi, td bom?</p>";
$cor = "vermelha";
echo"<p> A cor $cor </p>";
?>

<?php
echo '<br>';
// strlen() - conta a quantidade de strings
echo strlen("O rato roeu a roupa do rei de roma.");
echo '<br>';
// str_word_count() - conta a quantidade de palavras
echo str_word_count("O rato roeu a roupa do rei de roma.");
echo '<br>';
//strrev() - fazer de tras pra frente uma palavra
echo strrev("O rato roeu a roupa do rei de roma.");
echo '<br>';
// strpos() - retorna a posicao da palavra procurada
echo strpos("O rato roeu a roupa do rei de roma.", "O");
echo '<br>';
//str_replace() - substituir
$frase = "O rato roeu a roupa do rei de roma.";
echo str_replace("rei", "siri" , $frase);
echo '<br>';
//data

?>