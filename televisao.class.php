<?php
 /* Exercicios orientaçao objeto questao 124 letra B) */

class televisao{
    private $status;
    private $canal;
    private $volume;
    public function __contruct(){
        $this->status = false;
        $this->canal = 3;
        $this->volume =10;

    }
    public function ligaDesliga(){
        $this->status = !$this->status;
    }
    public function aumentaCanal(){
        $this->canal++;
    }
    public function diminuiCanal(){
        $this->canal--;
    }
    public function aumentaVolume(){
        $this->volume++;
    }
    public function diminuiVolume(){
        $this->volume--;
    }
    public function mostraCanal(){
        return $this->canal;
    }
    public function mostraVolume(){
        return $this->valume;
    }
}