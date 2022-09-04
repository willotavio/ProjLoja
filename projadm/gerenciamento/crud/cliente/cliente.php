<?php

    class cliente{

    public $codCliente, $nomeCliente, $cpfCliente, $cidadeCliente, $generoCliente;

    public function getcodCliente(){
        return $this->codCliente;
    }
    public function setcodCliente($cc){
        $this->codCliente = $cc;
    }
    
    public function getnomeCliente(){
        return $this->nomeCliente;
    }
    public function setnomeCliente($nc){
        $this->nomeCliente = $nc;
    }

    public function getcpfCliente(){
        return $this->cpfCliente;
    }
    public function setcpfCliente($cpfc){
        $this->cpfCliente = $cpfc;
    }

    
    public function getcidadeCliente(){
        return $this->cidadeCliente;
    }
    public function setcidadeCliente($cic){
        $this->cidadeCliente = $cic;
    }

    
    public function getgeneroCliente(){
        return $this->generoCliente;
    }
    public function setgeneroCliente($gc){
        $this->generoCliente = $gc;
    }
      
}
?>