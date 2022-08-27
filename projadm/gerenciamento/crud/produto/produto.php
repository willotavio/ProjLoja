<?php

    class produto{

    public $codProd, $descProd, $valorProd, $figuraProd;

    public function getcodProd(){
        return $this->codProd;
    }
    public function setcodProd($cp){
        $this->codProd = $cp;
    }
    

    public function getdescProd(){
        return $this->descProd;
    }
    public function setdescProd($dp){
        $this->descProd = $dp;
    }

    
    public function getvalorProd(){
        return $this->valorProd;
    }
    public function setvalorProd($vp){
        $this->valorProd = $vp;
    }

    
    public function getfiguraProd(){
        return $this->figuraProd;
    }
    public function setfiguraProd($fp){
        $this->figuraProd = $fp;
    }
      
}
?>