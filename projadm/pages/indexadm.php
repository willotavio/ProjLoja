<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerência</title>

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
        $("#header1").load("header.php");
    });
    </script>
    <!--importando header por js-->

    <link rel="stylesheet" href="../css/styleadm.css">

</head>

<header id="header1"></header>

<body>
        
        <!--modal add produto-->
        <div class="modal fade" id="addProd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: black">Incluir Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="color: black">
                <form class="row g-3">
                    <div class="col-6">
                        <label for="inputDesc" class="form-label">Descrição</label>
                        <input type="text" class="form-control" id="inputDesc">
                    </div>
                    <div class="col-6">
                        <label for="inputValor" class="form-label">Valor</label>
                        <input type="text" class="form-control" id="inputValor">
                    </div>
                    <div class="col-12">
                        <label for="inputFigura" class="form-label">Cod Figura</label>
                        <input type="text" class="form-control" id="inputFigura">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Adicionar</button>
            </div>
            </div>
        </div>
        </div>
        <!--modal add produto-->

        <!--modal pesquisar cliente-->
        <div class="modal fade" id="pesqCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: black">Pesquisar Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="color: black">
            <form class="row g-3">
                    <div class="col-12">
                        <label for="inputDesc" class="form-label">Nome do Cliente</label>
                        <input type="text" class="form-control" id="inputDesc">
                    </div>
                    <div class="col">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Pesquisar</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
            </div>
        </div>
        </div>
        <!--modal pesquisar cliente-->

        <!--modal pesquisar mensagem-->
        <div class="modal fade" id="pesqMens" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: black">Pesquisar Mensagens</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="modal-body" style="color: black">
            <form class="row g-3">
                    <div class="col-12">
                        <label for="inputDesc" class="form-label">Código da Mensagem</label>
                        <input type="text" class="form-control" id="inputDesc">
                    </div>
                    <div class="col">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Pesquisar</button>
                    </div>
                </form>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
            </div>
        </div>
        </div>
        <!--modal pesquisar mensagem-->

        <!--opcoes administrador-->
        <div style="padding-top: 170px;">
        <table class="table">
        <thead>
            <tr class="table" style="font-size:32px">
            <th scope="col">Produtos</th>
            <th scope="col">Clientes</th>
            <th scope="col">Mensagens</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table">
            <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProd">
            Incluir
            </button>
            </td>
            <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pesqCliente">
            Pesquisar
            </button>
            </td>
            <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pesqMens">
            Pesquisar
            </button>
            </td>
            </tr>
            <tr class="table">
            <td>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Excluir
            </button>
            </td>
            <td></td>
            <td>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Excluir
            </button>
            </td>
            </tr>
        </tbody>
        </table>
        </div>
        <!--opcoes administrador-->
       
    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <!--bootstrap-->

    <script>
    $(function() {
        $("footer1").load("footer.php");
    });
    </script>

    <footer id="footer1"></footer>

</body>
</html>