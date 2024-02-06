<?php
class Persona {
    protected $nome;
    protected $cognome;

    public function __construct($nome, $cognome) {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    public function presentati() {
        return "Mi chiamo {$this->nome} {$this->cognome}.";
    }
}
?>