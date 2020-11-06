<?php 

echo '<hr>';

$letras = ['a', 'b', 'c', 'd', 'e' ];

for($i = 0; $i<count($letras); $i++) {
    echo $letras[$i];
}

echo '<hr>';



for($i = 0; $i <= 20; $i++) {
  echo "${i} <br>";
}


echo '<hr>';


//foreach possui a sintaxe muito mais simples


foreach ($letras as $key => $letra) {
  echo "{$key} => {$letra} <br>" ;
}


echo '<hr>';

$i = 1;

while($i < 25) {
  echo "$i <br>";

  $i++;
}

echo '<hr>';
$i = 0;

while($i < count($letras)) {
  echo "$letras[$i] <br>";

  $i++;
}

//do while primeiro faz e depois verifica

$a = 1;

do {
 echo $a;

 $a++;
 
} while ($a <= 10);



?>