<?php 


// Manipulação de arrays com compact, is_array e in_array


$nomes = ['Ana', 'Julia', 'Ester'];


$name = 'Gabrinne';
$company = 'Althaia';
$year = 2020;

//A funcao compact, junta as variaveis em um único array.

$infoCompany = compact('name', 'company', 'year');
var_dump($infoCompany);


//a funcao is_array verifica se a variavel é um array 

var_dump(is_array($nomes)); 

//a funcao in_array serve para verificar se há um valor dentro do array

var_dump(in_array('Gabrinne', $infoCompany));


?>