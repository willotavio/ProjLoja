<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerência</title>

    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    <script>
    $(function() {
        $("#header").load("projsite/pages/header.php");
    });
    </script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="projsite/css/style.css">

</head>

<header id="header"></header>

<body>

        <table class="table">
        <thead>
            <tr style="font-size:32px">
            <th scope="col" style="padding-top: 150px;">Produtos</th>
            <th scope="col">Clientes</th>
            <th scope="col">Mensagens</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><button style="width: 250px;font-size:22px" type="button" class="btn btn-primary">Incluir</button></td>
            <td><button style="width: 250px;font-size:22px"  type="button" class="btn btn-primary">Pesquisar</button></td>
            <td><button style="width: 250px;font-size:22px"  type="button" class="btn btn-primary">Pesquisar</button></td>
            </tr>
            <tr>
            <td><button style="width: 250px;font-size:22px"  type="button" class="btn btn-danger">Excluir</button></td>
            <td></td>
            <td><button style="width: 250px;font-size:22px"  type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
        </tbody>
        </table>

       

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <script>
    $(function() {
        $("footer").load("projsite/pages/footer.php");
    });
    </script>

    <footer id="footer"></footer>

</body>
</html>