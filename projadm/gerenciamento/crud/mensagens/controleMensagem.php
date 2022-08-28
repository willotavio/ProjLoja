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
}else if($botao=='consultar'){
    ?>
        <style>
        <?php
        include '../css/style.css';
        ?>
        </style><?php
    $mensagemDao->consultarMens();
    foreach($mensagemDao->consultarMens() as $resultado){
        ?>
        <div>
        <form action="controleMensagem.php" method="GET">
        
        <p><label for="codMens">Código do Produto:</label>
        <input type="text" name='codMens' value='<?php echo $resultado['codMens'] ?>'>
            
        <label for="assuntoMens">Descrição:</label>
        <input type="text" name='assuntoMens' value='<?php echo $resultado['assuntoMens'] ?>'>
    </p>
        <label for="obsMens">Valor:</label>
        <input type="number" name='obsMens' value='<?php echo $resultado['obsMens'] ?>'>
        
        <label for="dataMens">Quantidade:</label>
        <input type="number" name='dataMens' value='<?php echo $resultado['dataMens'] ?>'>
        <p>
        
    </p>
        <p><input type='submit' name='botao' value='alterar'>
       <input type='submit' name='botao' value='deletar'></p>
        </form></div><?php
    }
}else{
    echo 'erro';
}

?>