<?php
require_once "bibliotecafuncoes.php";

use function conversoes\dolar;
use function conversoes\euro;
use function conversoes\peso;
use function conversoes\libra;
use function conversoes\iene;

echo "o valor de 10 dolares em reais é de: ", dolar(10,5), "\n";

echo "o valor de 10 euros em reais é de: ", euro(10,5.85), "\n";

echo "o valor de 10 pesos em peso é de: ", peso(10,0.0035), "\n";

echo "o valor de 10 libras em reais é de: ", libra(10,6.74), "\n";

echo "o valor de 10 ienes em reais é de: ", iene(10,0.031), "\n";

?>