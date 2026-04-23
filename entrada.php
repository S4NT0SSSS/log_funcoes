<?php

require_once "biblioteca.php";

use function matematica\soma;
use function texto\concatenar;
use function logica\verificaidade;
use function logica\exercito;



echo "soma: ", soma (1,1,1), "\n";
echo "nome completo : ", concatenar("joão", "silva\n", );
echo "status: ", verificaidade(19); 
echo "status: ", exercito("masculino", 18);
?>