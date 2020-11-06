<?php 

/* //cria um arquivo

var_dump(touch('test.txt')); */

/* //renomeia o arquivo
var_dump(rename('test.txt', 'test_2.txt'));
 */


/*  //verifica se um arquivo existe

var_dump(file_exists('test_2.txt')); */

/* //faz a cópia de um arquivo no diretorio
var_dump(copy('test_2.txt', 'test.txt'));
 */

 /* 
//remove o arquivo
 var_dump(unlink('test_2.txt'));
 */

/*  ///edita o arquivo e pôe um novo valor

 $content = 'Algo aqui';

if(file_exists('test.txt')){
  file_put_contents('test.txt', $content);
} else {
  echo 'Arquivo não existe!';
}
 */

 //lÊ O CONTEUDO DO ARQUIVO 
 
if(file_exists('test.txt')){
  var_dump(file_get_contents('test.txt'));
} else {
  echo 'Arquivo não existe!';
}


?>