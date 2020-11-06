<?php 

/* $text = 'Hj eh sexta';

generateLog($text);

function generateLog($text){

  //abre, se n existir, cria o arquivo tb
  $file = fopen('projetoX.log', 'a+');
  
  //escreve
  fwrite($file, "$text \r\n");
  
  
  //fecha
  fclose($file);
  
  
}; */
//feof - percorre linha por linha ate chegar ao fim do arquivo retorna true e false.
//fgets - imprime o conteudo dessas linhas
//segundo parametro eh a quantidade de caractere por linha, default 4096

$file = fopen('projetoX.log', 'a+');

while (!feof($file)) { //enquanto eu n chegarno fim, percorra.

echo fgets($file, 4096) . '<br>';

}

fclose($file);









?> 