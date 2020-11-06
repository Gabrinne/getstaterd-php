<?php 

//array_keys, array_values, array_merge e count



$infoCompany = [
  'name' => 'Especializa',
  'founder' => 'Carlos',
  'year' => 2020
];

$infoCompanyTwo = [
  'courses' => ['PHP', 'JS', 'Vue'],
  'total_courses' => 26,
];

// retorna as chaves do array  
var_dump(array_keys($infoCompany));

//retorna os valores do array
var_dump(array_values($infoCompany));




//retorna a quantidade de items no array
var_dump(count($infoCompany));



//junta dois arrays

$mergeando = array_merge($infoCompany, $infoCompanyTwo);

echo '<pre>';
var_dump($mergeando);





?>