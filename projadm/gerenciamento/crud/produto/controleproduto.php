<?php

$codProd = filter_input(INPUT_GET,'codProd');
$descProd = filter_input(INPUT_GET,'descProd');
$valorProd = filter_input(INPUT_GET,'valorProd');
$figuraProd = filter_input(INPUT_GET,'tipoPag');

$botao = filter_input(INPUT_GET,'botao');

include 'produto.php';
$produto = new produto();

$produto->setCodProd($codProd);
$produto->setDescProd($descProd);
$produto->setValorProd($valorProd);
$produto->setQtdeProd($figuraProd);

include 'produtoDao.php';
$produtoDao = new produtoDao();

if($botao=='add'){
    $produtoDao->cadastrarProd($produto);
}else if($botao=='alterar'){
    $produtoDao->atualizarProd($produto);
}else if($botao=='deletar'){
    $produtoDao->deletarProd($codProd);
}else if($botao=='consultar'){
    ?>
        <style>
        <?php
        include '../css/style.css';
        ?>
        </style><?php
    $produtoDao->consultarProd();
    foreach($produtoDao->consultarProd() as $resultado){
        ?>
        <div>
        <form action="controleProduto.php" method="GET">
        
        <p><label for="codProd">Código do Produto:</label>
        <input type="text" name='codProd' value='<?php echo $resultado['codProd'] ?>'>
            
        <label for="descProd">Descrição:</label>
        <input type="text" name='descProd' value='<?php echo $resultado['descProd'] ?>'>
    </p>
        <label for="valorProd">Valor:</label>
        <input type="number" name='valorProd' value='<?php echo $resultado['valorProd'] ?>'>
        
        <label for="qtdeProd">Quantidade:</label>
        <input type="number" name='qtdeProd' value='<?php echo $resultado['qtdeProd'] ?>'>
        <p>
        <label for="tipoPag">Tipo de Pagamento:</label>
        <input type="radio" name="tipoPag" value="vista">A vista 
            <input type="radio" name="tipoPag" value="prazo">A prazo<br><br>
        Tipo: <?php echo $resultado['tipoPag'] ?>
    </p>
        <p><input type='submit' name='botao' value='alterar'>
       <input type='submit' name='botao' value='deletar'></p>
        </form></div><?php
    }
}else{
    echo 'erro';
}

?>