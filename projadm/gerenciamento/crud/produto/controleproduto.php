<?php

$codProd = filter_input(INPUT_GET,'codProd');
$descProd = filter_input(INPUT_GET,'descProd');
$valorProd = filter_input(INPUT_GET,'valorProd');
$figuraProd = filter_input(INPUT_GET,'figuraProd');

$botao = filter_input(INPUT_GET,'botao');

include 'produto.php';
$produto = new produto();

$produto->setCodProd($codProd);
$produto->setDescProd($descProd);
$produto->setValorProd($valorProd);
$produto->setFiguraProd($figuraProd);

include 'produtoDao.php';
$produtoDao = new produtoDao();

if($botao=='add'){
    $produtoDao->cadastrarProd($produto);
}else if($botao=='alterar'){
    $produtoDao->atualizarProd($produto);
}else if($botao=='deletar'){
    $produtoDao->deletarProd($codProd);
}else{
    echo 'erro';
}
?>