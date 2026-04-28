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
    return($valor * $cotacaoiene);}
}
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
    return(($basemenor + $basemaior) * $altura / 2);}

}


?>