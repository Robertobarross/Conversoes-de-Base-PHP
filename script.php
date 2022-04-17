<?php

function conversoesBase(){

    // Converte de Binário p/ Decimal
    $binario = $_GET['binario'];
    $decimal = bindec($binario);
    echo "<p> O resultado da conversão Binário p/ Decimal é; " . $decimal;

    // Converte de Decimal p/ Binário
    $decbin = $_GET['decbin'];
    $binario = decbin($decbin);
    echo "<p> O resultado da conversão Decimal p/ Binário é; " . $binario;

    // Converte de Decimal p/ Hexadecimal
    $dechex = $_GET['dechex'];
    $hex = dechex($dechex);
    echo "<p> O resultado da conversão Decimal p/ Hexadecimal é; " . $hex;

    // Converte de Hexdaecimal p/ Binário
    $hexdec = $_GET['hexdec'];
    $dec = hexdec($hexdec);
    echo "<p> O resultado da conversão Hexadecimal p/ Binário é; " . $dec;
}

$resultado = conversoesBase();
return $resultado;

?>