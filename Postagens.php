<?php
$data = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/posts"));
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Teste</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="description" content="FrameWork Test">
    <meta name="author" content="Joao Victor Peruzzo Fontes">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/TesteJoao/index.php"><strong>Menu</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link">Postagens</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/TesteJoao/Albuns.php"><strong>Albuns</strong></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/TesteJoao/Todos.php"><strong>Todos</strong></a>
      </li>
    </ul>
  </div>
</nav>
    <h1></h1>
    <table class="table table-bordered table-dark">
        <tr>
            <th>User Id</th>
            <th>Id</th>
            <th>titulo</th>
            <th>Corpo</th>
        </tr>
        <?php
        foreach ($data as $dados) {
        ?>
            <tr>
                <td><?= $dados->userId ?></td>
                <td><?= $dados->id ?></td>
                <td><?= $dados->title ?></td>
                <td><?= $dados->body ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>