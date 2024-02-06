<?php
class Automobile extends Veicolo {
    protected $modello;

    public function __construct($marca, $anno, $modello) {
        parent::__construct($marca, $anno);
        $this->modello = $modello;
    }

    public function getModello() {
        return $this->modello;
    }
}
?>