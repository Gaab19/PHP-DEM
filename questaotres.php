<?php

//Escreva um codigo que receba a altura e peso do usario, calcule sem IMC e informe seu nivel

// SE IMC  < 18.5 (ABAIXO DO PESO)
// SE IMC  >= 18.5 E IMC <25 (PESO IDEAL)
// SE IMC >= 25 E IMC <= 30 (ACIMA DO PESO) 
// SE IMC > 30 (OBESIDADE)

$peso = 87.3;
$altura = 1.82;
$imc= $peso/($altura * $altura);
if($imc < 18.5){
echo "Abaixo do peso";}
    elseif($imc>=18.5 && $imc <25) {
 echo "peso ideal";}
    elseif($imc>25 && $imc<=30){
 echo "Acima do peso"; 
  }else{
  echo "Obesidade";
   }
   
 









?>