<?php 
//md5 - muito popular - gera um hash de 32 caracteres. Porem retorna sempre a
//mesma hash pra um valor. nesses casos podemos criar as nossas e misturar.
echo('<hr>');
$despistando = 'kyTSFbmUtw1Q04SxVrwtrkçp';

$password = '123456' . $despistando;

echo md5($password);

//sha1
echo('<hr>');

echo sha1($password);
echo('<hr>');

echo crypt($password, $despistando);

echo('<hr>');

echo base64_decode($password);
echo('<hr>');

echo base64_encode($password);

echo('<hr>');

echo hash('sha512', $password);

?>