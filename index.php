<?php
require_once 'config.php';

$c = new Controller();
$c->index();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!--CSS-->
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

<div class="container">

   <header class="row clearfix">
    Logomarca
   </header> 

   <nav class="row clearfix caixa">
    
        <ul class="nav nav-pills menu-estilo">
        <li>
            <a href="index.html">Início</a>
        </li>
        <li>
            <a href="listas.html">Listas</a>
        </li>
        <li>
            <a href="produtos.html">Produtos</a>
        </li>
        </ul>

   </nav>

   <div class="row clearfix caixa">
   <section class="col-md-6">
   <form method="POST" class="form-estilo">

   <?php
    if ($c->loginIndex)
    echo '<h4 class="alert alert-warning" style="margin: 10px auto;" "text-align: center">' . $c->loginIndex . '</h4>';
   ?>

       <hr>
       <h2 class="titulo">
           <strong>Efetue o Login:</strong>
       </h2>
       <hr>
       <p><input type="email" name="email" class="form-control" placeholder="Digite seu email" required/></p>
       <p><input type="password" name="senhalog" class="form-control" placeholder="Digite sua senha" required /></p>
       <label class="checkbox">
           <input type="radio" name="lembrete" />&nbspLembrar Senha.
       </label>
       <br />
       <p><button name="login" type="submit" class="btn btn-lg btn-info btn-block">Cadastrar</button></p>
   </form>
   </section>
   
   <section class="col-md-6">
   <form method="POST" class="form-estilo">
   <?php
   if ($c->cadastroIndex)
   echo '<h4 class="alert alert-warning" style="margin: 10px auto"; "text-align: center">' .$c->cadastroIndex . '</h4>';
   ?>
   
   <section class="col-md-6">
       <hr>
       <h2 class="titulo">
           <strong>Cadastre-se agora:</strong>
       </h2>
       <hr>
       <p><input type="text" name="nome" class="form-control" placeholder="Digite seu nome" required</p>
       <p><input type="email" name="emailcad" class="form-control" placeholder="Digite seu email" required /></p>
       <p><input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required /></p>   
       <p><button name="login" type="submit" class="btn btn-lg btn-info btn-block">Cadastrar</button></p>
       </form>
   </section>

   
    </div>

   <section class="row clearfix caixa">
    <hr>
    <h2 class="titulo">
        <strong>Como criar sua própria lista?</strong>
    </h2>
    <hr>

    <div class="col-md-6">
        <img src="img/usuario/perfil.jpg">
    </div>

    <div class="col-md-6">
        <p>
            Texto Explicativo
        </p>
    </div>
    
   </section>
   </div>


</body>
</html>
