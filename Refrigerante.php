<?php

require_once 'Bebida.php';

class Refrigerante extends Bebida{

    private $retornavel;


    public function setRetornavel($retornavel){
        $this->retornavel = $retornavel;
    }

    public function getRetornavel(){
        return $this->retornavel;
    }



    public function mostraBebida()
    {

        //$isRetornavel = $this->getRetornavel()?"Sim":"Não";

        // if($this->getRetornavel()){
        //     $isRetornavel = "Sim";
        // }else{
        //     $isRetornavel = "Não";
        // }


        // $mostra = "Nome: ".$this->getNome().
        //           "<br/>Preço: ".$this->getPreco().
        //           "<br/>Retornável: ".$isRetornavel;

        $mostra = "Nome: ".$this->getNome().
        "<br/>Preço: ".$this->getPreco().
        "<br/>Retornável: ".($this->getRetornavel()?"Sim":"Não");
        return $mostra;
    }

    public function verificaPreco($preco)
    {
        return $preco < 5?true:false;
    }

}