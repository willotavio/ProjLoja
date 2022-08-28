<?php

include '../../connection/conexao.php';

class mensagemDao{

    public function cadastrarMens(Mensagem $m){
        $sql = 'insert into mensagem (codMens,assuntoMens,obsMens,dataMens) values(?,?,?,?)';
        
        $banco = new conexao();
        $con = $banco->getConexao();
        $res = $con->prepare($sql);
        $res->bindValue(1,$m->getcodMens());
        $res->bindValue(2,$m->getassuntoMens());
        $res->bindValue(3,$m->getobsMens());
        $res->bindValue(4,$m->getdataMens());

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

    public function deletarMens($codMens){
        $sql = 'delete from mensagem where codMens=?';

        $banco = new conexao();
        $con = $banco->getConexao();
        $res = $con->prepare($sql);
        $res->bindValue(1,$codMens);

        $final = $res->execute();

        if($final){
            echo "<script LANGUAGE='JavaScript'>
            window.alert('Deletado com sucesso!');
            window.location.href='../../../pages/indexadm.php'
            </script>";
            }
}

    public function consultarMens(){
        $sql = 'select * from mensagem';

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