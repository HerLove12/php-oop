<?php
class Alunno{
    protected $nome;
    protected $cognome;
    protected $anni;

    function __construct($n, $c, $a){
        $this->nome = $n;
        $this->cognome = $c;
        $this->anni = $a;
    }

    function getNome(){
        return $this->nome;
    }

    function getCognome(){
        return $this->cognome;
    }

    function getAnni(){
        return $this->anni;
    }

    function setNome($n){
        $this->nome = $n;
    }

    function setCognome($c){
        $this->cognome = $c;
    }

    function setAnni($a){
        $this->anni = $a;
    }

    function toString(){
        echo"nome: {$this->nome}" . "\n cognome: {$this->cognome}" . "\n eta: {$this->anni}";
    }
}