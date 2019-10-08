<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Tabela de Pedidos</title>
    
    <link rel="icon" href="assets/img/download.png">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/verpedido.css">  
    <link rel="stylesheet" href="assets/css/all.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
    <section id="cebola">
            <h1>La Boca</h1>
    </section>
      <button class="navbar-toggler navbar-toggler-right btn btn-success" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
            </li>
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Pizza.php">Pizza</a>
            </li>
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Por%C3%A7%C3%B5es.php">Porções</a>
            </li>
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Bebidas.php">Bebidas</a>
            </li>
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="pedido.php">Pedir</a>
            </li>
         <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="verpedido.php">L.Endereços</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>


<section class="rounded">
        <h1 id="h1" >Lista de Endereços</h1>
    </section>

    <div class="table-responsive rounded">
    <table class="table table-striped table-bordered table-dark rounded">
        <thead class="thead-dark" id="title">
            <th class="bg-success">Nome Completo</th>
            <th class="bg-success">Endereço</th>
            <th class="bg-success">Setor</th>
            <th class="bg-success">Telefone</th>
        </thead>
<?php
    try {
        require('conexao.php');
        // A variável $pdo, usada a seguir, está vindo do conexao.php

        $consulta = $pdo->prepare("SELECT * FROM cliente");
        $consulta->execute();

        $cliente = $consulta->fetchAll();
        
        foreach($cliente as $cliente) {
            echo "<tr>
                    <td>{$cliente["nomecompleto"]}</td>
                    <td>{$cliente["endereco"]}</td>
                    <td>{$cliente["setor"]}</td>
                    <td>{$cliente["telefone"]}</td>
                </tr>";
        }

    } catch(Exception $e) {
        die("Erro de banco de dados: " . $e->getMessage());
    }    
?>    
        </table>
    </div>

    <div id="butom">
    <a class="btn btn-success" href="index.php" role="button">Voltar</a>
    </div>

    <script src="vendor/popper.min.js"></script>
    <script src="vendor/jquery-3.3.1.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
