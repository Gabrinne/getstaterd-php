<?php 

$cart = [
  0 => 'arroz', 
  1 => 'feijao', 
  2 => 'balas', 
  3 => 'carne'

];

//arsort - ordena o array (VALUES) em decrescente (z => a) 

echo '<pre>';
arsort($cart);
var_dump($cart);

echo '<hr>';

//asort - ordena o array (VALUES) de forma crescente (a => z)
asort($cart);
var_dump($cart);
echo '<hr>';


//sort - ordena tanto o value quanto as keys,  de forma crescente.
sort($cart);
var_dump($cart);
echo '<hr>';


?>