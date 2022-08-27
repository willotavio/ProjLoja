<?php

    class mensagem{

    public $codMens, $assuntoMens, $obsMens, $dataMens;

    public function getcodMens(){
        return $this->codMens;
    }
    public function setcodMens($cm){
        $this->codMens = $cm;
    }
    

    public function getassuntoMens(){
        return $this->assuntoMens;
    }
    public function setassuntoMens($am){
        $this->assuntoMens = $am;
    }

    
    public function getobsMens(){
        return $this->obsMens;
    }
    public function setobsMens($om){
        $this->obsMens = $om;
    }

    
    public function getdataMens(){
        return $this->dataMens;
    }
    public function setdataMens($dm){
        $this->dataMens = $dm;
    }
      
}
?>