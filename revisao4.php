<h2>Escreva um codigo que receba um valor inteiro, converta-o em anos, exiba a idade e informe se ele é maior ou menor de idade<h2>

<h3> RESPOSTA<h3>

<?php

$valor = 10000;
$idade =  $valor / 365;

echo number_format($idade);
if($idade >= 18) {
  echo " Maior de idade ";

}else{
 
  echo " Menor de idade ";
}

?>