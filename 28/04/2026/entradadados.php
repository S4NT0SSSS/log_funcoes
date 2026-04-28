<?php
require_once "bibliotecafuncoes.php";

use function conversoes\dolar;
use function conversoes\euro;
use function conversoes\peso;
use function conversoes\libra;
use function conversoes\iene;
use function areas\areaquadrado;
use function areas\arearetangulo;
use function areas\areatriangulo;
use function areas\areacirculo;
use function areas\areatrapezio;




echo "o valor de 10 dolares em reais é de: ", dolar(10,5), "\n";
echo "o valor de 10 euros em reais é de: ", euro(10,5.85), "\n";
echo "o valor de 10 pesos em peso é de: ", peso(10,0.0035), "\n";
echo "o valor de 10 libras em reais é de: ", libra(10,6.74), "\n";
echo "o valor de 10 ienes em reais é de: ", iene(10,0.031), "\n";
echo "a area do quadrado é de: ", areaquadrado(5,5), "\n";
echo "a area do retangulo é de: ", arearetangulo(5,10), "\n";
echo "a area do triangulo é de: ", areatriangulo(5,8), "\n";
echo "a area do circulo é de: ", areacirculo(5,5,2), "\n";
echo "a area do trapezio é de: ", areatrapezio(5,9,3), "\n";



?>