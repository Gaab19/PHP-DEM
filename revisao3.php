<h2> O cliente de uma loja realizou a copra de um produto e decidiu fazer o pagamento em 12 parcelas iguais . 
para este parcelamento e cobrado  juros de 1% ao mes.Escreva um codigo que calcule e exiba o valor total da compra e o valor das parcelas.<h2>

<h3> RESPOSTA<h3>

<?php

$valor = 1200;
$juros= ($valor * 0.12);
$total = $valor + $juros;
$parcela = $total / 12;

echo $total."<br>";
echo $parcela;



?>