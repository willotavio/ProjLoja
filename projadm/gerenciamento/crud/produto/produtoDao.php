<?php

include '../../connection/conexao.php';

class produtoDao{

    public function cadastrarProd(Produto $p){
        $sql = 'insert into produto (codProd,descProd,valorProd,figuraProd) values(?,?,?,?)';
        
        $banco = new conexao();
        $con = $banco->getConexao();
        $res = $con->prepare($sql);
        $res->bindValue(1,$p->getCodProd());
        $res->bindValue(2,$p->getDescProd());
        $res->bindValue(3,$p->getValorProd());
        $res->bindValue(4,$p->getFiguraProd());

        $final = $res->execute();

        if($final){
            echo "<script LANGUAGE='JavaScript'>
            window.alert('Adicionado com sucesso!');
            window.location.href='../../../pages/indexadm.php'
            </script>";
        }else{
            echo 'deu ruim';
        }
    }

    public function atualizarProd(Produto $p){
        $sql = 'update produto set codProd=?, descProd=?, valorProd=?, figuraProd=?';

        $banco = new conexao();
        $con = $banco->getConexao();
        $res = $con->prepare($sql);
        $res->bindValue(1,$p->getCodProd());
        $res->bindValue(2,$p->getDescProd());
        $res->bindValue(3,$p->getValorProd());
        $res->bindValue(4,$p->getFiguraProd());

        $final = $res->execute();

        if($final){
            echo "<script LANGUAGE='JavaScript'>
            window.alert('Alterado com sucesso!');
            window.location.href='../index.php'
            </script>";
        }
    }

    public function deletarProd($codProd){
        $sql = 'delete from produto where codProd=?';

        $banco = new conexao();
        $con = $banco->getConexao();
        $res = $con->prepare($sql);
        $res->bindValue(1,$codProd);

        $final = $res->execute();

        if($final){
            echo "<script LANGUAGE='JavaScript'>
            window.alert('Deletado com sucesso!');
            window.location.href='../../../pages/indexadm.php'
            </script>";
            }
}

    public function consultarProd(){
        $sql = 'select * from produto';

        $banco = new conexao();
        $con = $banco->getConexao();
        $res = $con->prepare($sql);
        $res->execute();
        if($res->rowCount()>0){
            $valor = $res->fetchAll(\PDO::FETCH_ASSOC);
            return $valor;
        }else{
            echo "<script LANGUAGE='JavaScript'>
            window.alert('Não há nenhum produto cadastrado!');
            window.location.href='../index.php'
            </script>";
        }
    }

}

?>