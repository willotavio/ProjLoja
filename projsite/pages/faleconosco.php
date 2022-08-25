<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>

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
        $("#header").load("header.php");
    });
    </script>
    <!--importando header por js-->

    <link rel="stylesheet" href="../css/stylesite.css">
</head>

<header id="header"></header>

<body>
<div id="divLogin" class="shadow-lg p-3 bg-white rounded">
        <h1 class="text text-dark" id="titleLogin">FALE CONOSCO</h1>
        <form action="../indexadm.php" style="padding: 10px">
        <div class="col mb-3">
            <label class="text text-dark" for="assunto" class="col-sm-2 col-form-label">Assunto</label>
            <div class="col">
            <input type="text" class="form-control" id="assunto">
            </div>
        </div>
        <div class="col mb-3">
            <label class="text text-dark" for="obs" class="col-sm-2 col-form-label">Observação</label>
            <div class="col">
            <input type="password" class="form-control" id="obs">
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
            </div>
        </div>
        <button type="submit" class="btn btn text text-white" style="background-color: rgb(40, 90, 100);">Entrar</button>
    </form>
    <div class="bg-transparent"><a class="bg-transparent" href="" style="text-decoration: none;color: rgb(40, 90, 100)">Cadastre-se</a></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>
</html>