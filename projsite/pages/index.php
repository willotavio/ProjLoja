<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>

    <!--bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--bootstrap-->

    <!--importando header por js-->
    <!-- <script>
    $(function() {
        $("#header").load("projsite/pages/header.php");
    });
    </script> -->
    <!--importando header por js-->

    <link rel="stylesheet" href="projsite/css/stylesite.css">

</head>

    <!-- <header id="header"></header> -->

    <!--navbar-->
<header id="header" style="margin-bottom: 100px;">
    <nav class="navbar navbar-expand-lg" style="position: fixed;z-index: 1000;width: 100%;">
        <div class="container-fluid">
            <a class="navbar-brand" href=""><img src="projsite/imgs/logo.png" width="60px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " href="" style="color:white">CADASTRO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#faleConosco" style="color:white">FALE CONOSCO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projadm/pages/login.php" style="color:white">GERENCIAR</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color:white">
                            CONTA
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style=" background-color: rgb(40, 90, 100);">
                            <li><a class="dropdown-item" href="projadm/pages/perfil.php" style="color:white">VER PERFIL</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="" style="color:white">SAIR</a>
                            </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--navbar-->

<body>
    <!--modal fale conosco-->
    <div class="modal fade" id="faleConosco" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: black">Fale Conosco</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="color: black">
                <form action="projadm/gerenciamento/crud/mensagem/controleMensagem.php" method="GET" class="row g-3">
                    <div class="col-6">
                        <label for="codMens" class="form-label">Cod Mensagem</label>
                        <input type="number" class="form-control" id="codMens" name="codMens">
                    </div>
                    <div class="col-6">
                        <label for="assuntoMens" class="form-label">Assunto</label>
                        <input type="text" class="form-control" id="assuntoMens" name="assuntoMens">
                    </div>
                    <div class="col-6">
                        <label for="obsMens" class="form-label">Observação</label>
                        <input type="text" class="form-control" id="obsMens" name="obsMens">
                    </div>
                    <div class="col-6">
                        <label for="dataMens" class="form-label">Data</label>
                        <input type="date" class="form-control" id="dataMens" name="dataMens">
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary" name='botao' value='add'>Adicionar</button>
            </div>
            </form>
            </div>
        </div>
    </div>
    <!--modal fale conosco-->
    <div>

        <div id="carouselExampleIndicators" class="carousel slide shadow-lg" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="projsite/imgs/banner.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="projsite/imgs/banner.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="projsite/imgs/banner.png" class="d-block w-100" alt="...">
    </div>
    <a href="#" class="btn btn-info text-white" style="width: 150px; margin: auto; position: absolute;transform: translate(-75px,350px)">Ver ofertas</a>
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  
</div>
         
    <div class="container text-dark" style="margin-top:25px">
    <?php
    include_once("../../projadm/gerenciamento/connection/conexao.php");
    include_once("../../projadm/gerenciamento/crud/produto/produto.php");
    $sql= "SELECT * FROM produto order by rand() limit 1";
            $banco = new conexao();
            $con = $banco->getConexao();
            $res_prod = $con->query($sql);
            while($row = $res_prod->fetch()){
                ?><div class="row">
                <div class="col sm-4">
                <div class="card" style="width: 18rem;margin: auto">
                <img src="projsite/imgs/prod/1.jpg" class="card-img-top" alt="produto 1" title="produto 1">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['descProd'];?></h5>
                    <p class="card-text"><?php echo $row['descProd'];?></p>
                    <a href="#" class="btn btn-info text-white">Comprar</a>
                </div>
                </div>
                </div><?php
            }
            ?>
        
        
        <div class="col sm-4">
        <?php
    $sql= "SELECT * FROM produto order by rand() limit 1"; 
            $banco = new conexao();
            $con = $banco->getConexao();
            $res_prod = $con->query($sql);
            while($row = $res_prod->fetch()){
                ?>
            <div class="card" style="width: 18rem;margin: auto">
            <img src="projsite/imgs/prod/1.jpg" class="card-img-top" alt="produto 2" title="produto 2">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['descProd'];?></h5>
                <p class="card-text"><?php echo $row['descProd'];?></p>
                <a href="#" class="btn btn-info text-white">Comprar</a>
            </div>
            </div>
            </div><?php
            }
        ?>

        <div class="col sm-4">
        <?php
    $sql= "SELECT * FROM produto order by rand() limit 1"; 
            $banco = new conexao();
            $con = $banco->getConexao();
            $res_prod = $con->query($sql);
            while($row = $res_prod->fetch()){
                ?>
            <div class="card" style="width: 18rem;margin: auto">
            <img src="projsite/imgs/prod/1.jpg" class="card-img-top" alt="produto 2" title="produto 2">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['descProd'];?></h5>
                <p class="card-text"><?php echo $row['descProd'];?></p>
                <a href="#" class="btn btn-info text-white">Comprar</a>
            </div>
            </div>
            </div><?php
            }
        ?>
        </div>
    </div>

    </div>
    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <!--bootstrap-->

    <!-- <script>
    $(function() {
        $("footer").load("projsite/pages/footer.php");
    });
    </script>

    <footer id="footer"></footer> -->
    <footer>
    <div id='rodape'>
        <h1>LOJA INSANA</h1>
        <p style="margin: 0px">2022</p>
    </div>
    </footer>

</body>
</html>