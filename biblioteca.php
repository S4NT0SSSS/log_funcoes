<?php

namespace matematica {
    function soma($a, $b, $c){
    return $a + $b + $c;}

    function Subtrair($a, $b){
    return($a - $b);}

    function Multiplicar($a, $b){
    return($a * $b);}

    function dividir($a, $b){
    return($a / $b);}}

namespace texto {
    function concatenar($nome, $sobrenome){
        return $nome . " " . $sobrenome;
    }}


namespace logica{
    function verificaidade($idade){
        if ($idade >= 18){
            echo "maior de idade!\n";
        }
        else{
            echo "menor de idade!";
        }
    }
    function exercito($sexo, $idade){
        if ($idade >= 18 && $sexo == "masculino"){
            return "voce esta apto a servir o exercito";
        }
        else{
            return "voce nao cumpre aos requisitos";
        }
    }}
?>