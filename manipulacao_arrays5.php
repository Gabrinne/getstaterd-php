<?php 
//end, array_filter e array_map 

echo '<pre>';

$ages = [12, 14, 18, 20, 44, 50, 98, 78, 56];

//end retorna o último elemento do array

echo end($ages);

//ou então: echo $ages[count($ages) - 1]; //pois o count não conta do 0 

echo '<hr>';

$agesFiltered = array_filter($ages, function ($age) {
  return $age >= 18;
});

var_dump($agesFiltered);

echo '<hr>';


$names = ['Carlos', 'Especializa', 'Company'];

//num array map, é preciso primeiro passar o callback e depois o array que deve ser formatado

/* $names = array_map(function ($name) {
    return strtoupper($name);
}, $names);

var_dump($names); */
$names = array_map('applyToupper', $names);

var_dump($names);

echo '<hr>';


function applyToupper($value) {
  return strtoupper($value);
};

var_dump($names);






?>