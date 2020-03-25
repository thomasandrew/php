<?php

class Pessoa {

    protected $nome;
    const ESPECIE = "Humana"; // I don't need to use $ to create constants.  
  

    public function __construct($tmpNome) {
        $this->nome = $tmpNome;
    }

    public function setNome($novoNome) {
        $this->nome = $novoNome;
    }

    public function getNome() {
        return $this->nome;
    }
}