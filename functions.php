<?php 
    echo '<hr>';
  function imprimir() {
    echo 'Sou  uma função!';
  }

  imprimir();

echo '<hr>';

function pt ($value) {
  echo $value;
}

$nome = 'gabz';
pt($nome);
echo '<hr>';

//

function sum(int $n1, int $n2): int {
  return $n1 + $n2;
}

echo sum(12, 12);

echo '<hr>';

//com parametro opcional, deve estar sempre por ultimo
//2 É DEFAULT

function sumTwo(int $n1, int $n2, int $taxa = 2):int {
      return ($n1 + $n2) * $taxa;
}

echo sumTwo(1, 2, 4);


//funções recursivas - quando a própria funcao chama ela mesma

function factorial(int  $number): int {
  $number * $number - 1
}



?> 