<!doctype html>
<html lang="pt-br">
    <head> 
    <title>La Boca</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">
    <link rel="icon" href="assets/img/download.png">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/Style.css">  
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


  <section id="form" class="bg-transparent rounded">
            <h2 id="pedido" >Faça seu pedido</h2>
            
    <form method="post" action="tratar.php">

        <?php
            if(isset($_GET['resultado']) && $_GET['resultado'] == 'sucesso') :
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Pedido realizado com seucesso!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
            endif;
        ?>

        <div class="form-group">
            <label for="nomecompleto">Nome Completo</label>
            <input type="text" class="form-control" id="nomecompleto"  placeholder="Entre com seu nome" name="nomecompleto" required>
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco"  placeholder="Entre com seu endereço" name="endereco" required>
        </div>   
        <div class="form-group">
            <label for="setor">Setor</label>
            <input type="text" class="form-control" id="setor"  placeholder="Entre com seu endereço" name="setor" required>
        </div> 
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="tel" class="form-control" id="telefone"  placeholder="63988880000" name="telefone" size="11" maxlength="11">
        </div>
        <div class="form-group">
            <label for="id">Escolha a Pizza</label>
            <select class="form-control" id="id" name="id" required>
                <option value="1">Mussarela</option>
                <option value="2">Alho e óleo</option>
                <option value="3">Calabresa</option>
                <option value="4">Banana</option>
                <option value="5">Brasileira </option>
                <option value="6">Bacon</option>
                <option value="7">Presunto</option>
                <option value="8">Imperial</option>
                <option value="9">Americana</option>
                <option value="10">Milho verde</option>
                <option value="11">Vegetariana</option>
                <option value="12">Palmito</option>
                <option value="13">Atum</option>
                <option value="14">Atum c/catupiry</option>
                <option value="15">Mineira</option>
                <option value="16">Paulista</option>
                <option value="17">Portuguesa</option>
                <option value="18">Peito de Peru c/ Catupiry</option>
                <option value="19">Frango c/ Catupiry</option>
                <option value="20">Quatro Queijos </option>
                <option value="21">Moda</option>
                <option value="22">Tropical</option>
                <option value="23">Carne de Sol</option>
                <option value="24">Marguerita</option>
                <option value="25">Milho c/ Catupiry</option>
                <option value="26">Cecilia</option>
                <option value="27">Viena</option>
                <option value="28">Filé</option>
                <option value="29">Lombo</option>
                <option value="30">Napolitana</option>
                <option value="31">Nobre</option>
                <option value="32">Italiana</option>
                <option value="33">Defumada</option>
                <option value="34">Executiva</option>
                <option value="35">Siena</option>
                <option value="36">Baiana</option>
                <option value="37">Dois Queijos</option>
                <option value="38">Caipira</option>
                <option value="39">Tomate seco</option>
                <option value="4" selected>Escolha</option>
            </select>
        </div>            
        <div class="form-group">
            <label for="tamanho">Tamanho da Pizza</label>
            <select class="form-control" id="tamanho" name="tamanho" required>
                <option value="1">Pequena</option>
                <option value="2">Média</option>
                <option value="3">Grande</option>
                <option value="4" selected>Outros</option>
            </select>
        </div>           
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>
    

</body
>
     <script src="js/script.js"></script>
     <script src="vendor/popper.min.js"></script>
    <script src="vendor/jquery-3.3.1.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</html>