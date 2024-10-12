<?php

require_once 'Bebida.php';

class Suco extends Bebida{

    private $sabor;

    public function setSabor($sabor){
        $this->sabor = $sabor;
    }

    public function getSabor(){
        return $this->sabor;
    }



    public function mostraBebida()
    {
        $mostra = "Nome: ".$this->getNome().
                  "<br/>Preço: ".$this->getPreco().
                  "<br/>Sabor: ".$this->getSabor();
        return $mostra;
    }

    public function verificaPreco($preco)
    {
        return $preco < 2.5?true:false;
    }

}