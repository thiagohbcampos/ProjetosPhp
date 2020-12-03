<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><pre>
        <?php
        require_once 'Mamifero.php';
        require_once 'Cachorro.php';
        require_once 'Lobo.php';
        $m = new Mamifero();
        $c = new Cachorro();
        $l = new Lobo();
        
        $l ->emitirSom();
        $c ->emitirSom();
        $m ->emitirSom();
        $c ->reagirFrase("Olá");
        $c ->reagirFrase("Vai Apanhar!");
        $c ->reagirHora(11,45);
        $c ->reagirHora(21,00);
        $c  ->reagirIdadePeso(2, 12.5);
        $c ->reagirIdadePeso(17, 4.5);
                
        ?></pre>
    </body>
</html>
