<?php 
//array_pop | array_shift | unset | array_push | array_unshift | array_unique

$cart = ['arroz', 'feijao', 'balinhas'];


/* 

//array_pop remove o último elemento do array 

var_dump($cart); //com balinha

array_pop($cart); //tiro

var_dump($cart); //sem balinha

*/


/* 
//array_shift remove o primeiro elemento do array

var_dump($cart);
array_shift($cart);
var_dump($cart);

*/

//Unset - remove o item do array conforme sua posição. Se passar a funcao sem parametro da posição, ele irá remover toda a variavel. 

echo '<hr>';
var_dump($cart);

unset($cart[1]); //removendo

echo '<hr>';
var_dump($cart);
echo '<hr>';

//array push inclui um item no array 
array_push($cart, 'Tapete');
array_push($cart, 'Tapete');
var_dump($cart);

echo '<hr>';

//array_unshift adiciona um item no inicio do array 
array_unshift($cart, 'PrimeiroItemArray');
var_dump($cart);

//array unique remove elementos repetidos do array
echo '<hr>';
$cart = array_unique($cart);
var_dump($cart);







?>