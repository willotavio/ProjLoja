<?php

$codMens = filter_input(INPUT_GET,'codMens');
$assuntoMens = filter_input(INPUT_GET,'assuntoMens');
$obsMens = filter_input(INPUT_GET,'obsMens');
$dataMens = filter_input(INPUT_GET,'dataMens');

$botao = filter_input(INPUT_GET,'botao');

include 'mensagem.php';
$mensagem = new mensagem();

$mensagem->setcodMens($codMens);
$mensagem->setassuntoMens($assuntoMens);
$mensagem->setobsMens($obsMens);
$mensagem->setdataMens($dataMens);

include 'mensagemDao.php';
$mensagemDao = new mensagemDao();

if($botao=='add'){
    $mensagemDao->cadastrarMens($mensagem);
}else if($botao=='alterar'){
    $mensagemDao->atualizarMens($mensagem);
}else if($botao=='deletar'){
    $mensagemDao->deletarMens($codMens);
}else{
    echo 'erro';
}

?>