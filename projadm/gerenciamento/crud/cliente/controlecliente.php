<?php

$codCliente = filter_input(INPUT_GET,'codCliente');
$nomeCliente = filter_input(INPUT_GET,'nomeCliente');
$cpfCliente = filter_input(INPUT_GET,'cpfCliente');
$cidadeCliente = filter_input(INPUT_GET,'cidadeCliente');
$generoCliente = filter_input(INPUT_GET,'generoCliente');

$botao = filter_input(INPUT_GET,'botao');

include 'cliente.php';
$cliente = new cliente();

$cliente->setCodCliente($codCliente);
$cliente->setNomeCliente($nomeCliente);
$cliente->setCpfCliente($cpfCliente);
$cliente->setCidadeCliente($cidadeCliente);
$cliente->setGeneroCliente($generoCliente);

include 'clienteDao.php';
$clienteDao = new clienteDao();

if($botao=='add'){
    $clienteDao->cadastrarCliente($cliente);
}else if($botao=='alterar'){
    $clienteDao->atualizarCliente($cliente);
}else if($botao=='deletar'){
    $clienteDao->deletarCliente($cliente);
}else{
    echo 'erro';
}
?>