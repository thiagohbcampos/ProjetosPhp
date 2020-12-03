<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao {
//Atributos
private $titulo;
private $autor;
private $totPaginas;
private $pagAtual;
private $aberto;
private $leitor;

//Metodos
    public function detalhes() {
        echo "<hr> Livro" . $this->titulo . " escrito por ". $this->autor;
        echo "<br> Páginas: ". $this->totPaginas. " atual: ".$this->pagAtual;
        echo "<br> Sendo lido por: ". $this->leitor->getNome();
    }
    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    function setAutor($autor): void {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas): void {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto): void {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->aberto = true;
    }

    public function avancarPag() {
        $this->pagAtual ++;
    }

    public function fechar() {
        $this->aberto = false;
    }

    public function folhear($p) {
        if ($p>$this->totPaginas) {
            $this->pagAtual=0;
        } else {
            $this->pagAtual=$p;
        }
    }

    public function voltarPag() {
        $this->pagAtual --;
    }

}

