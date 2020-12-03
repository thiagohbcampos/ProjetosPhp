<?php

require_once 'Aluno.php';
class Bolsista extends Aluno {
private $bolsa;
public function renovarBolsa() {
    echo"<p>Bolsa Renovada!</p>";
}

public function pagarMensalidade() {
        echo "<p><b>$this->nome</b> é bolsista! Então paga com desconto!</p>";
    }
function getBolsa() {
    return $this->bolsa;
}

function setBolsa($bolsa): void {
    $this->bolsa = $bolsa;
}



}
