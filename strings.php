<?php 

    //explode delimita uma string e retorna um array dessa string.

    echo('<hr>');

    $state = 'São Paulo/SP/Brasil/Terra';

    $arrayState = explode('/', $state);
    var_dump($arrayState);

    //implode transforma um array numa string.
    echo('<hr>');

    echo implode($arrayState, '-');
    echo('<hr>');
    //ltrim - remove os espaços do inicio da string.

    $name = ' gabi '; //com o espaço, ficam 6 caracteres.
    var_dump($name);
    var_dump(ltrim($name)); //tirou o espaço da frente e agora são 5 caracteres.
    var_dump(rtrim($name)); //tirou o espaço do final e agora são 4 caracteres.
    var_dump(trim($name)); //tirou o espaço do final e inicio agora são 4 caracteres.

    echo('<hr>');
    
    /// str_replace substitui parte da string por um novo valor.

    $dominio = 'https://www.gabs.com.br';

    echo str_replace('www.', '', $dominio);

    echo('<hr>');
    //sub_str - retorna parte de uma string. precisamos definir inicio e fim.

    
    echo substr($dominio, 0, 5);
    echo('<hr>');
  

    $protocol = substr($dominio, 0, 8);

    if($protocol === 'https://') 
      echo 'É seguro';
    
      echo('<hr>');


  //strlen - conta a quantidade de caracteres na string
  
  echo strlen($dominio);

  echo('<hr>');
  
  // isset - verifica se a variavel existe
    
  $protocols = '1';
  if(isset($protocols)) 
    echo $protocols;
   else 
    echo 'Não existe';
  

    //unset - deleta a variavel da memoria

    unset($protocols);
    
    echo $protocols;
?>