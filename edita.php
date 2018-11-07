<?php

    include 'crud.php';
    if($_SERVER['REQUEST_METHOD'] === 'GET') {
      $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
      $aluno = localiza($id);
    }
 ?>
<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Luis Paulo Lessa">
  <meta name="description" content="Sistema Gramachinhos">
  <meta name="keywords" content="projeto, Gramachinhos, solidariedade, ong, peace, crianças">
  <meta name="robots" content="noindex, nofollow">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <style>

    @media (min-width: 576px)  {
      html, body {
          height: 100%;
          margin: 0;
      }
    }

    html,
    body {
        color: white;
    }

    .custom-file-label::after  {
      content: "Buscar";
    }

    body {
      background: #304352;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to bottom, #d7d2cc, #304352);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to bottom, #d7d2cc, #304352); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    .responsive-btn {
      padding-right: 0;
      padding-left: 0;
    }
  </style>
  <title>Web Notas</title>
</head>
<body>
  <div class="container-fluid">
    <figure class="col-sm-6 offset-sm-3 col-12">
      <img src="https://logodownload.org/wp-content/uploads/2014/10/senac-logo-2.png" height="200" width="300" class="rounded mx-auto d-block" alt="Logo Senac Transparente">
    </figure>
    <fieldset class="container-fluid text-center mt-5">
      <legend class="mb-5">Editar de Aluno</legend>
      <form action="update.php" method="post" enctype="multipart/form-data">
        <div class="row">

          <!-- Column Contact basic Informations html -->
          <div class="col-10 offset-1 col-sm-4">
            <div class="form-group">
              <label for="inputNome" class="sr-only">Nome</label>
              <input type="text" class="form-control" title="Nome do contato" id="inputNome" placeholder="Informe o nome" name="txtNome" value="<?= $aluno['nome'] ?>" required>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="sr-only">Email</label>
              <input type="email" class="form-control" title="Email do contato" id="inputEmail" placeholder="Informe o email" name="txtEmail" value="<?= $aluno['email'] ?>" required>
            </div>
            <div id="btn" class="responsive-btn">
              <button type="submit" name="txtId" value="<?= $aluno['id'] ?>" class="btn btn-dark float-left col-sm-4">Gravar</button>
            </div>
          </div>

          <!-- Column Contact Address Informations html -->
          <div class="col-10 offset-1 col-sm-4">
            <div class="form-group">
              <label for="inputNota01" class="sr-only">Nota 01</label>
              <input type="number" min="0" max="10.0" class="form-control" title="Nota 01" id="inputNota 01" placeholder="Informe a Nota 01" name="txtNota01" value="<?= number_format($aluno['nota01'] / 10, 1, '.', '') ?>" required>
            </div>
            <div class="form-group">
              <label for="inputNota01" class="sr-only">Nota 02</label>
              <input type="number" min="0" max="10.0" class="form-control" title="Nota 02" id="inputNota 02" placeholder="Informe a Nota 02" name="txtNota02" value="<?= number_format($aluno['nota02'] / 10, 1, '.', '') ?>" required>
            </div>
            <div id="btn" class="responsive-btn">
              <a href="listar.php" class="btn btn-success float-right col-sm-4">Listar</a>
            </div>
          </div>
        </div>
      </form>
    </fieldset>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
