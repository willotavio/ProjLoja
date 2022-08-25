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
                        <a class="nav-link" href="projsite/pages/faleconosco.php" style="color:white">FALE CONOSCO</a>
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
    <div class="container text-dark" style="margin-top:25px">
    <div class="card text-center" style="width: 78rem; margin: auto">
        <div class="card-header">
        </div>
        <img src="projsite/imgs/banner.jpg" class="card-img-top" alt="banner" title="banner">
        <div class="card-body">
            <a href="#" class="btn btn-info text-white">Ver ofertas</a>
        </div>
    </div>
</div>
    <div class="container text-dark" style="margin-top:25px">
        <div class="row">
            <div class="col sm-4">
            <div class="card" style="width: 18rem;margin: auto">
            <img src="projsite/imgs/prod/1.jpg" class="card-img-top" alt="produto 1" title="produto 1">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-info text-white">Comprar</a>
            </div>
            </div>
            </div>
        
        <div class="col sm-4">
            <div class="card" style="width: 18rem;margin: auto">
            <img src="projsite/imgs/prod/1.jpg" class="card-img-top" alt="produto 2" title="produto 2">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-info text-white">Comprar</a>
            </div>
            </div>
            </div>
        
        <div class="col sm-4">
            <div class="card" style="width: 18rem;margin: auto">
            <img src="projsite/imgs/prod/1.jpg" class="card-img-top" alt="produto 3" title="produto 3">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-info text-white">Comprar</a>
            </div>
            </div>
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