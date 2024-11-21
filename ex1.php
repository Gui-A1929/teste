<?php
/*
$idade = 30;

if ($idade <=13){
    echo "criança";
}elseif($idade <=18 ){
    echo "Adolecente";

}elseif($idade>=65){
    echo "idoso";
}else{
    echo "adulto";
}*/





$notas = [85, 78, 90, 65, 88];
$soma = array_sum($notas);
$media = $soma / count($notas);

if ($media >= 90) {
    $classificacao = "Excelente";
} elseif ($media >= 75 and $media < 90) {
    $classificacao = "Bom";
} elseif ($media >= 50 and $media < 75) {
    $classificacao = "Regular";
} else {
    $classificacao = "Insuficiente";
}
echo "Média: $media\n";
echo "Classificação: $classificacao\n";




$numeros = [3, 5, 2, 8, 1];
$maior = max($numeros);

echo "O maior número é: $maior\n";





$numeros = [10, 15, 30, 25, 40];
echo "Números divisíveis por 5:\n";
foreach ($numeros as $numero) {
    if ($numero % 5 == 0) {
        echo "$numero\n";
    }
}




$inicio = 10;
$fim = 30;

echo "Números primos entre $inicio e $fim:\n";
for ($i = $inicio; $i <= $fim; $i++) {
    $nPrimo = true;
    if ($i < 2) {
        $nPrimo = false;
    } else {
        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $nPrimo = false;
                break;
            }
        }
    }
    if ($nPrimo) {
        echo "$i\n";
    }
}





$a = 0;
$b = 1;
$contador = 0;
echo "Sequência de Fibonacci (10 primeiros números):\n";

while ($contador < 10) {
    echo "$a\n";
    $soma = $a + $b;
    $a = $b;
    $b = $soma;
    $contador++;
}







?>

$numeros = [3,5,2,8,1];
$maior = $numeros[1];
for($i=0;$i<count($numeros);$i++){
    if ($numeros [i$] > $maior){
        $maior = $numeros[$i];
    }
}
echo $maior
