<?php 

//pode ser usado pra login, carrinho de compras.. etc

//cookies - salva informacoes no client -(navegador) define o tempo maior pra deixar o valor salvo no navegador do usuario.

/* setcookie('cookie_teste', 'teste'); */

setcookie('auth', 'OK', (time() + (7 * 24 * 60 * 60))); //7 dias

/* echo $_COOKIE['cookie_teste']; */




?> 