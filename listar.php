<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Luis Paulo Lessa">
  <meta name="description" content="Sistema Aula PHP">
  <meta name="keywords" content="projeto, PHP, SQL, MySQL">
  <meta name="robots" content="noindex, nofollow">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <style>
    /* media query */
    @media (min-width: 576px)  {
      html, body {
          height: 100%;
          margin: 0;
      }
    }

    body {
      background: #304352;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to bottom, #d7d2cc, #304352);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to bottom, #d7d2cc, #304352); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
  </style>
  <title>Agenda Senac</title>
</head>
<body>
  <div class="container-fluid">
    <figure class="col-sm-6 offset-sm-3 col-12">
      <img src="https://logodownload.org/wp-content/uploads/2014/10/senac-logo-2.png" height="200" width="300" class="rounded mx-auto d-block" alt="Logo Senac Transparente">
    </figure>
    <div class="container-fluid text-center" style="margin-top:5%">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Primeira nota</th>
            <th>Segunda nota</th>
            <th colspan="2"></th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'crud.php';

            $listAlunos = lista();
            foreach ($listAlunos as $aluno) {
          ?>
          <tr>
            <td><?= $aluno['nome'] ?></td>
            <td><?= $aluno['email'] ?></td>
            <td><?= $aluno['nota01'] ?></td>
            <td><?= $aluno['nota02'] ?></td>
            <td><a href="edita.php?id=<?=  $aluno['id'] ?>">Editar</a></td>
            <td><a href="excluir.php?id=<?=  $aluno['id'] ?>">Editar</a></td>
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
