<?php

  # constantes
  define("SERVER", array(
    "host" => "localhost",
    "user" => "root",
    "pass" => "",
    "dbase" => "projetofinal",
    "port" => "3306"
  ));

  #define("NOME_CONSTANTE", "valor_da_constante");
  function getConnection() {
    $link = mysqli_connect(SERVER['host'], SERVER['user'], SERVER['pass'], SERVER['dbase'], SERVER['port']);
    mysqli_set_charset($link, 'utf8');
    return $link;
  }

  if(!getConnection()) {// EOL - End Of Line (Final da linha)
      echo 'Falha ao abrir a conexão, erro sob o número: ' . mysqli_errno() . PHP_EOL;
      echo 'A mensagem do erro: ' . mysqli_error() . PHP_EOL;
      exit;
  }
