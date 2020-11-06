<?php 

//array simples
$cars = array(2, 'gabs', 12.8);

var_dump ($cars[1]);

$carros = ['uno', 'gol', 'celta']; //melhor usar este modelo

var_dump($carros[2]);


//array com indices de string

$caracteristicas = [
  'cor' => 'Branco',
  'portas' => 4,
  'ano' => 2018
];



$caracteristicas['airbag'] = true; //foi acrescentado no array
$caracteristicas['som'] = 'Model123';

 //echo $caracteristicas['som'];


var_dump($caracteristicas); //exibe airbag e som acrescentados no array 


echo $caracteristicas['cor']; //branco

$caracteristicas['cor'] = 'Black'; //alterei pra black


echo $caracteristicas['cor']; //black

/// array multidimensional


$cacete = [
    'Mercedes' => [
      'color' => 'branco',
      'motor' => 5.2
    ],

    'Ford' => [
      'color' => 'preto',
      'motor' => 3.1
  ]

    ];
  

    echo $cacete['Ford']['color']; //branco
    $cacete['Ford']['color'] = 'vermelho';//trocando
    echo $cacete['Ford']['color']; //vermelho
    
?> 