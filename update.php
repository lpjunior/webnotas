<?php

  include 'crud.php';
  session_start();

  if($_SERVER['REQUEST_METHOD'] === 'POST') {

    /*
      filter_input - Obtém uma variável externa específica por nome e, opcionalmente, a "filtra".
      SANITIZE - trata os campos, removendo caracteres não especificos para o tipo
    */
    # http://php.net/manual/en/filter.filters.sanitize.php
    $id = filter_input(INPUT_POST, 'txtId', FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'txtNome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'txtEmail', FILTER_SANITIZE_EMAIL);
    $nota01 = filter_input(INPUT_POST, 'txtNota01', FILTER_SANITIZE_NUMBER_FLOAT);
    $nota02 = filter_input(INPUT_POST, 'txtNota02', FILTER_SANITIZE_NUMBER_FLOAT);

    if(atualiza($id, $nome, $email, $nota01, $nota02)) {
      $_SESSION['msg'] = 'Dados gravados com sucesso!';
    } else {
      $_SESSION['msg'] = 'Falha ao gravar.';
    }

    header('Location: index.html');
  }
