<?php

include '../../connection/conexao.php';

class clienteDao{

    public function cadastrarCliente(Cliente $c){
        $sql = 'insert into cliente (codCliente,nomeCliente,cpfCliente,cidadeCliente,generoCliente) values(?,?,?,?,?)';
        
        $banco = new conexao();
        $con = $banco->getConexao();
        $res = $con->prepare($sql);
        $res->bindValue(1,$c->getcodCliente());
        $res->bindValue(2,$c->getnomeCliente());
        $res->bindValue(3,$c->getcpfCliente());
        $res->bindValue(4,$c->getcidadeCliente());
        $res->bindValue(5,$c->getgeneroCliente());

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

    public function deletarCliente($codCliente){
        $sql = 'delete from cliente where codCliente=?';

        $banco = new conexao();
        $con = $banco->getConexao();
        $res = $con->prepare($sql);
        $res->bindValue(1,$codCliente);

        $final = $res->execute();

        if($final){
            echo "<script LANGUAGE='JavaScript'>
            window.alert('Deletado com sucesso!');
            window.location.href='../../../pages/indexadm.php'
            </script>";
            }
}

    public function consultarCliente(){
        $sql = 'select * from cliente';

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