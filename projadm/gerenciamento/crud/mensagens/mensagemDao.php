<?php

include '../../connection/conexao.php';

class mensagemDao{

    public function cadastrarMensagem(Mensagem $m){
        $sql = 'insert into mensagem (codMens,assuntoMens,obsMens,dataMens) values(?,?,?,?)';
        
        $banco = new conexao();
        $con = $banco->getConexao();
        $res = $con->prepare($sql);
        $res->bindValue(1,$p->getcodMens());
        $res->bindValue(2,$p->getassuntoMens());
        $res->bindValue(3,$p->getobsMens());
        $res->bindValue(4,$p->getdataMens());

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
        $sql = 'delete from produto where codMens=?';

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