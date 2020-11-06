<?php

session_start();

var_dump($_SESSION);

if (isset($_SESSION['auth'])) {
  echo 'painel admin';
  /* header('Location:sessions.php'); //renderizar p essa pagina */
} else {
  echo 'logar';
}

?>