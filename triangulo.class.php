<?php

 /* Exercicios orientaçao objeto questao 126 letra D) */

class triangulo{
    private $base;
    private $altura;
    public function setBase($base){
        $this->base = $base;

    }
    public function setaltura(){
        $this->altura = $altura;
    }
    public function calculaArea(){
        $resultado =($this->base* $this->altura)/2;
        return $resultado;
    }
}