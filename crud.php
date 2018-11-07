<?php
  require_once 'conexao.php';

  # grava no banco
  function registra($nome, $email, $nota01, $nota02) {
    $link = getConnection();
    $query = "insert into tb_notas(nome, email, nota01, nota02) values ('{$nome}', '{$email}', {$nota01}, {$nota02})";

    return mysqli_query($link, $query);
  }

  ## consultas

  # consulta todos
  function lista() {
    $link = getConnection();
    $query = "select * from tb_notas";

    $registros = mysqli_query($link, $query);
    $lista = array();

    while($linha = mysqli_fetch_assoc($registros)) {
      array_push($lista, $linha);
    }
    return $lista;
  }

  # consulta por id
  function localiza($id) {
    $link = getConnection();
    $query = "select * from tb_notas where id = {$id}";

    $registro = mysqli_query($link, $query);

    return mysqli_fetch_assoc($registro);
  }

  # atualiza
  function atualiza($id, $nome, $email, $nota01, $nota02) {
    $link = getConnection();
    $query = "update tb_notas set nome = '{$nome}', email = '{$email}', nota01 = {$nota01}, 
    nota02 = {$nota02} where id = {$id}";

    return mysqli_query($link, $query);
  }

  # apaga
  function apaga($id) {
    $link = getConnection();
    $query = "delete from tb_notas where id = {$id}";

    return mysqli_query($link, $query);
  }
