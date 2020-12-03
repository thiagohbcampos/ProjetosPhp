<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
       
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        
        $p[0] = new Pessoa("Pedro", 22, "M");
        $p[1] = new Pessoa("Mara", 19, "F");
        
        $l[0] = new Livro("PHP Básico", "Marcos Roberto", 200, $p[0]);
        $l[1] = new Livro("Introdução a Java", "Camilo Roberto", 300, $p[1]);
        
        $l[0]->abrir();
        $l[0]->folhear(80);
        $l[0]->avancarPag();
        $l[0]->detalhes();
        
                
        $l[1]->abrir();
        $l[1]->folhear(8);
        $l[1]->voltarPag();
        $l[1]->detalhes();
        
        ?></pre>
    </body>
</html>
