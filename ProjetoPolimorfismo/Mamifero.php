<?php

require_once 'Animal.php';
class Mamifero extends Animal {
    private $corPelo;
    
    public function locomover() {
        echo"<p>Correndo</p>";
    }

    public function alimentar() {
        echo "<p>Mamando</p>";
    }

    public function emitirSom() {
        echo "<p>Som de Mamifero</p>";
    }
    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo($corPelo): void {
        $this->corPelo = $corPelo;
    }



}
