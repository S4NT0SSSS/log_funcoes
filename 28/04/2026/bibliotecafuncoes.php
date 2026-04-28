<?php

namespace conversoes{
    function dolar($valor, $cotacaodolar){
    return($valor * $cotacaodolar);}
 
    function euro($valor, $cotacaoeuro){
    return($valor * $cotacaoeuro);}

    function peso($valor, $cotacaopeso){
    return($valor * $cotacaopeso);}

    function libra($valor, $cotacaolibra){
    return($valor * $cotacaolibra);}

    function iene($valor, $cotacaoiene){
    return($valor * $cotacaoiene);}}
namespace areas{

    function areaquadrado($lado){
    return($lado * $lado);}

    function arearetangulo($base, $altura){
    return($base * $altura);}

    function areatriangulo($base, $altura){
    return($base * $altura);}

    function areacirculo($raio, $pi ){
    return($pi * ($raio * $raio));}

    function areatrapezio($basemenor, $basemaior, $altura){
    return(($basemenor + $basemaior) * $altura / 2);}}

namespace saude{

    function calcularImc($peso, $altura){
    return($peso / ($altura * $altura));}
    
    function valorIdealAgua($peso){
    return($peso * 0.035);}

    function frequenciaCardiacaMaxima($idade){
    return(220 - $idade);}
    
    function converterLibrasParaQuilo($libras){
    return($libras / 2.205);}

     function calcularCaloriasBasais ($peso, $idade, $sexo, $altura){
    
    if ($sexo == "masculino"){
      return ($peso * 10 + 6.25 * $altura - 5 * $idade + 5);
    }

    else{
      return (($peso * 10) + (6.25 * $altura) - 5 * ($idade - 161));
    }
  }
}
?>