<?php 
/*  
 var_dump($_FILES['foto']);


aceita um arquivo


$photo = $_FILES['photo'];
$path = 'uploads/imgs/';


if(move_uploaded_file($photo['tmp_name'], $path . $photo['name'])) 
  echo 'Sucesso!';
 else
  echo 'Falha!';
 
 */ 

 //multiplos 

 $photos = $_FILES['photos'];
 $path = 'uploads/imgs/';

  //verificar se o diretorio existe, caso nao existir, ele cria

  if(!is_dir($path)) {
    mkdir('uploads');
    mkdir($path);

  }


 for ($i = 0; $i < count($photos['name']); $i++) {
   if(move_uploaded_file($photos['tmp_name'][$i], $path . $photos['name'][$i]))
    echo "Sucesso ao mover o arquivo {$i}";
    else 
      echo "Falha ao enviar o arquivo {$i}";
  }







/* //validação 

if($_REQUEST['nome'] != '' && strlen($_REQUEST['nome']) > 3) {
    
//pega get e post, porém pega cookies, sessions e etc 
echo "Nome: {$_REQUEST['nome']}";
echo '<hr>';

echo "Senha: {$_REQUEST['senha']}";
echo '<hr>';
echo "Email: {$_REQUEST['email']}";
echo '<hr>';
echo "Concordo: {$_REQUEST['concordo']}";
echo '<hr>';
echo "Sexo: {$_REQUEST['sexo']}";
echo '<hr>';
echo "Estado: {$_REQUEST['estado']}";
echo '<hr>';
echo "Descricao: {$_REQUEST['descricao']}";


} else {
  echo 'Preencha todos os campos!';
}

 */






/* echo "Nome: {$_POST['nome']}";
echo '<hr>';
echo "Senha: {$_POST['senha']}";
echo '<hr>';
echo "Email: {$_POST['email']}";
echo '<hr>';
echo "Concordo: {$_POST['concordo']}";
echo '<hr>';
echo "Sexo: {$_POST['sexo']}";
echo '<hr>';
echo "Estado: {$_POST['estado']}";
echo '<hr>';
echo "Descricao: {$_POST['descricao']}"; */

?>