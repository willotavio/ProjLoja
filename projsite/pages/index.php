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
    <script>
    $(function() {
        $("#header").load("projsite/pages/header.php");
    });
    </script>
    <!--importando header por js-->

    <link rel="stylesheet" href="projsite/css/stylesite.css">

</head>

<header id="header"></header>

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

    <script>
    $(function() {
        $("footer").load("projsite/pages/footer.php");
    });
    </script>

    <footer id="footer"></footer>

</body>
</html>