<?php

class Pessoa {
 // Atributos
 private $nome;
 private $idade;
 private $sexo;
 //Metodos
 public function fazerAniver() {
     $this->idade ++;
 }
 function __construct($nome, $idade, $sexo) {
     $this->nome = $nome;
     $this->idade = $idade;
     $this->sexo = $sexo;
 }
 function getNome() {
     return $this->nome;
 }

 function getIdade() {
     return $this->idade;
 }

 function getSexo() {
     return $this->sexo;
 }

 function setNome($nome): void {
     $this->nome = $nome;
 }

 function setIdade($idade): void {
     $this->idade = $idade;
 }

 function setSexo($sexo): void {
     $this->sexo = $sexo;
 }


    
}
