<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {
    private $matr;
    private $curso;
    
    public function cancelarMatr() {
        echo "<p>Matricula será cancelada</p>";
        
        
    }
    function getMatr() {
        return $this->matr;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatr($matr): void {
        $this->matr = $matr;
    }

    function setCurso($curso): void {
        $this->curso = $curso;
    }


    
   
}
