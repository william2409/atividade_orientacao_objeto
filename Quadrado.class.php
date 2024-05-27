<?php

 /* Exercicios orientaçao objeto questao 126 letra A) */

class quadrado{
    private $lado;
    public function setLado($lado){
        $this->lado = $lado;
    }
    public function calculaArea(){
        $restuldado = $this->lado * $this->lado;
        return $resultado;
    }
}