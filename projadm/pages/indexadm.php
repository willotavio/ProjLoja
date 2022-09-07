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
        
    

    <link rel="stylesheet" href="../css/styleadm.css">

</head>

<!--navbar-->
<header id="header" style="margin-bottom: 100px;">
    <nav class="navbar navbar-expand-lg" style="position: fixed;z-index: 1000;width: 100%;">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../"><img src="../imgs/logo.png" id="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color:white">
                            PRODUTOS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style=" background-color: rgb(40, 90, 100);">
                            <li><a class="dropdown-item" href="" style="color:white">INCLUIR</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="" style="color:white">EXCLUIR</a>
                            </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color:white">
                            CLIENTES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style=" background-color: rgb(40, 90, 100);">
                            <li><a class="dropdown-item" href="" style="color:white">PESQUISAR</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color:white">
                            MENSAGENS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style=" background-color: rgb(40, 90, 100);">
                            <li><a class="dropdown-item" href="" style="color:white">PESQUISAR</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="" style="color:white">EXCLUIR</a>
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
        
<!--modal add produto-->
<div class="modal fade" id="addProd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: black">Incluir Produto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body" style="color: black">
        <form action="../gerenciamento/crud/produto/controleproduto.php" method="GET" class="row g-3">
            <div class="col-md-6">
                <label for="nomeProd" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nomeProd" name="nomeProd">
            </div>
            <div class="col-md-6">
                <label for="descProd" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="descProd" name="descProd">
            </div>
            <div class="col-md-6">
                <label for="valorProd" class="form-label">Valor</label>
                <input type="text" class="form-control" id="valorProd" name="valorProd">
            </div>
            <div class="col-md-6">
                <label for="figuraProd" class="form-label">Cod Figura</label>
                <input type="text" class="form-control" id="figuraProd" name="figuraProd">
            </div>
        
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-outline-primary" name='botao' value='add'>Adicionar</button>
    </div>
    </form>
    </div>
</div>
</div>
<!--modal add produto-->
<!--modal delete produto-->
<div class="modal fade" id="deleteProd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: black">Excluir Produto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body" style="color: black">
        <form action="../gerenciamento/crud/produto/controleproduto.php" method="GET" class="row g-3">
            <div class="col">
                <label for="codProd" class="form-label">Cod</label>
                <input type="text" class="form-control" id="codProd" name="codProd">
            </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-outline-danger" name='botao' value='deletar'>Deletar</button>
    </div>
    </form>
    </div>
</div>
</div>
<!--modal delete produto-->
<!--modal pesquisar produto-->
<div class="modal fade" id="pesqProd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: black">Pesquisar Produtos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body" style="color: black">
    <form class="row g-3">
            <div class="col-12">
                <label for="inputDesc" class="form-label">Código do Produto</label>
                <input type="text" class="form-control" id="inputDesc">
            </div>
            <div class="col">
            <button type="submit" class="btn btn-outline-primary" data-bs-dismiss="modal">Pesquisar</button>
            </div>
    </div>
    </form>
    <div style="color: black">
    <?php
    include_once("../gerenciamento/connection/conexao.php");
    $sql= "SELECT * FROM produto";
            $banco = new conexao();
            $con = $banco->getConexao();
            $res_prod = $con->query($sql);
            while($row = $res_prod->fetch()){
                echo "<tr>";
                echo "<td style='text-align:center;'>Código: ".$row['codProd']."</td><br>";
                echo "<td style='text-align:center'>Descrição: ".$row['descProd']."</td><br>";
                echo "<td style='text-align:center'>Valor: ".$row['valorProd']."</td><br>";
                echo "<td style='text-align:center'>Figura: ".$row['figuraProd']."</td><br>";
                
                echo "</tr> <hr>";
            }
    ?>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
    </div>
    </div>
</div>
</div>
<!--modal pesquisar produto-->
<!--modal alterar produto-->
<div class="modal fade" id="alterarProd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: black">Alterar Produtos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body" style="color: black">
    <form action="../gerenciamento/crud/produto/controleproduto.php" method="GET" class="row g-3">
            <div class="col-6">
                <label for="codProd" class="form-label">Cod</label>
                <input type="text" class="form-control" id="codProd" name="codProd">
            </div>
            <div class="col-6">
                <label for="descProd" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="descProd" name="descProd">
            </div>
            <div class="col-6">
                <label for="valorProd" class="form-label">Valor</label>
                <input type="text" class="form-control" id="valorProd" name="valorProd">
            </div>
            <div class="col-12">
                <label for="figuraProd" class="form-label">Cod Figura</label>
                <input type="text" class="form-control" id="figuraProd" name="figuraProd">
            </div>
        </div>
        <div class="col">
        <button type="submit" class="btn btn-outline-primary" name='botao' value='alterar'>Alterar</button>
        </div>
        </form>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
    </div>
    </div>
</div>
</div>
<!--modal alterar produto-->
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
            <button type="submit" class="btn btn-outline-primary" data-bs-dismiss="modal">Pesquisar</button>
            </div>
    </div>

    <div style="color: black">
        <?php
            include_once("../gerenciamento/connection/conexao.php");
            $sql= "SELECT * FROM cliente";
            $banco = new conexao();
            $con = $banco->getConexao();
            $res_prod = $con->query($sql);
            while($row = $res_prod->fetch()){
                echo "<tr>";
                echo "<td style='text-align:center;'>Código: ".$row['codCliente']."</td><br>";
                echo "<td style='text-align:center;'>Nome: ".$row['nomeCliente']."</td><br>";     
                echo "<td style='text-align:center'>CPF: ".$row['cpfCliente']."</td><br>";
                echo "<td style='text-align:center'>Cidade: ".$row['cidadeCliente']."</td><br>";
                echo "<td style='text-align:center'>Gênero: ".$row['generoCliente']."</td><br>";
                
                echo "</tr> <hr>";
            }
        ?>
        </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
    </div>
    </form>
    </div>
</div>
</div>
<!--modal pesquisar cliente-->
<!--modal excluir cliente-->
<div class="modal fade" id="excluirCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: black">Excluir Cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body" style="color: black">
        <form action="../gerenciamento/crud/cliente/controlecliente.php" method="GET" class="row g-3">
            <div class="col">
                <label for="codCliente" class="form-label">Cod</label>
                <input type="text" class="form-control" id="codCliente" name="codCliente">
            </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-outline-danger" name='botao' value='deletar'>Deletar</button>
    </div>
    </form>
    </div>
</div>
</div>
<!--modal excluir cliente-->
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
            <button type="submit" class="btn btn-outline-primary" data-bs-dismiss="modal">Pesquisar</button>
            </div>
    </div>
    </div>
    </form>

    <div style="color: black">
    <?php
    include_once("../gerenciamento/connection/conexao.php");
    $sql= "SELECT * FROM mensagem";
            $banco = new conexao();
            $con = $banco->getConexao();
            $res_mens = $con->query($sql);
            while($row = $res_mens->fetch()){
                echo "<tr>";
                echo "<td style='text-align:center;'>Código: ".$row['codMens']."</td><br>";
                echo "<td style='text-align:center'>Descrição: ".$row['assuntoMens']."</td><br>";
                echo "<td style='text-align:center'>Valor: ".$row['obsMens']."</td><br>";
                echo "<td style='text-align:center'>Figura: ".$row['dataMens']."</td><br>";
                
                echo "</tr> <hr>";
            }
    ?>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
    </div>
    </div>
</div>
</div>
<!--modal pesquisar mensagem-->
<!--excluir mensagem-->
<div class="modal fade" id="deleteMensagem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: black">Excluir Mensagem</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body" style="color: black">
        <form action="../gerenciamento/crud/mensagem/controleMensagem.php" method="GET" class="row g-3">
            <div class="col">
                <label for="codMens" class="form-label">Cod</label>
                <input type="text" class="form-control" id="codMens" name="codMens">
            </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-outline-danger" name='botao' value='deletar'>Deletar</button>
    </div>
    </form>
    </div>
</div>
</div>
<!--excluir mensagem-->
<!--opcoes administrador-->
<div style="margin-top: 150px;" class="shadow-lg rounded">
<table class="table">
<thead>
    <tr class="table" style="font-size:32px">
    <th scope="col"><img src="..\imgs\iconspage\iconmercadorias.png" alt="produtos" title='produtos'></th>
    <th scope="col"><img src="../imgs/iconspage/iconclientes.png" alt="clientes" title='clientes'></th>
    <th scope="col"><img src="..\imgs\iconspage\iconmensagens.png" alt="mensagens" title='mensagens'></th>
    </tr>
</thead>
<tbody>
    <tr class="table">
    <td>
    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addProd">
    Incluir
    </button>
    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteProd">
    Excluir
    </button>
    
    </td>
    <td>
    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#pesqCliente">
    Pesquisar
    </button>
    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#excluirCliente">
    Excluir
    </button>
    </td>
    
    <td>
    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#pesqMens">
    Pesquisar
    </button>
    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteMensagem">
    Excluir
    </button>
    </td>
    </tr>
    <tr class="table">
        <td>
        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#pesqProd">
    Pesquisar
    </button>
    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#alterarProd">
    Alterar
    </button>
        </td>
        <td></td>
        <td></td>
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

    <footer>
    <div id='rodape'>
        <h1>LOJA INSANA</h1>
        <p style="margin: 0px">2022</p>
    </div>
    </footer>

</body>
</html>