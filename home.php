<?php
require_once 'config.php';
$c = new Controller();
$c->home();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Perfil</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!--CSS-->
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<div class="container">
    
<header class="row clearfix">

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

    < class="row clearfix caixa">
    <?php
    if ($c->mensagemHome)
    echo '<h4 class="alert alert-warning" style="margin: 10px auto;" "text-align: center">' .$c->mensagemHome . '</h4>';
    ?>

    <hr>
    <h2 class="titulo">
        <strong>Meu Perfil</strong>
    </h2>
    <hr>

    <section class="col-md-6">
    <h4 class="titulo">Imagem de Perfil</h4>
    <img src="img/usuario/perfil.jpg" <?php $c->perfil['foto']; ?>" class="img-responsive center-block" alt=""/>
    <hr />
    <form method="POST" class="form-estilo" enctype="multipart/form-data">
        <p><input class="form-control" type="file" name="arquivo"></p>
        <p><button name="enviarFoto" class="btn btn-lg btn-info btn-block" type="submit">Enviar</button></p>
    </form>
    </section>

    <section class="col-md-6">
        <h4 class="titulo">Dados de Perfil:</h4>
        <p>Nome: <?php echo $c->perfil['nome']; ?></p>
        <p>Email: <?php echo $c->perfil['email']; ?></p>
        <p><a href="listas.php?id=<?php echo $c->perfil ['id']; ?>">Meu Link</a></p>
        <p>Data de Criação: <?php echo $c->perfil ['criacao']; ?></p>
        <br />

        <div class="bg-warning">
            <h3>Minha Lista</h3>
            <?php if ($c->lista) {?>
            <p>Nome: <?php echo $c->lista['descricao']; ?></p>
            <form method="POST">
            <button name="excluirLista" class="btn btn-danger" type="submit">
            <span class="glyphicon glyphicon-remove">Excluir</span>
            </button>
            </form>
            <?php } else { ?>
            <form method="POST" style="width: 250px;">
            <input type="text" name="descricao" class="form-control" placeholder="Coloque aqui o nome da sua lista" required>

            <br />
            <button name="criarLista" class="btn btn-lg btn-info btn-block" type="submit">Criar lista</button>
            </form>
            <?php } ?>
        </div>
    </section>
    </div>



    <div class="row clearfix">

    <section class="col-md-6 caixa" style="background-color: #fff;">
        <h3 class="titulo">Itens da Lista</h3>
        <table class="table table-striped">
            <thread>
                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>Excluir</th>
                </tr>
            </thread>
            <tbody>
            <?php if ($c->itens) {
                foreach ($c->itens as $item) {
                    ?>
                <tr>
                    <td><?php echo $item['codigo']; ?></td>
                    <td><?php echo $item['nome']; ?></td>
                    <td>
                    <form method="POST">
                        <input type="hidden" name="codProduto" value="<?php echo $item['codigo']; ?>" />
                        <button name="excluirItem" class="btn btn-danger" type="submit">
                        <span class="glyphicon glyphicon-remove">Excluir</span>
                        </button>
                    </form></td>    
                </tr>

                <?php }
                }
                ?>
            </tbody>
        </table>
    </section>
    <br />
    <section class="col-md-6 caixa">
        <h3 class="titulo">Indicar para um Amigo</h3>
        <form class="form-estilo" method="POST">
            <p><input type="text" name="nome" placeholder="nome" required/></p>
            <p>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </p>
            <p>
                <button name="enviaEmail" class="btn btn-lg btn-info btn-block" type="submit">Indicar</button>
            </p>
        </form>
    </section>

</div>
</div>
</body>
</html>