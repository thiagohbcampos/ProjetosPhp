<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><pre>
        <?php
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        require_once 'Canguru.php';
        require_once 'Cachorro.php';
        require_once 'Cobra.php';
        require_once 'Goldfish.php';
        require_once 'Arara.php';
        require_once 'Tartaruga.php';
        
        $m = new Mamifero();
        $a = new Ave();
        $p = new Peixe();
        $r = new Reptil();
        $can = new Canguru();
        $cach = new Cachorro();
        $t = new Tartaruga();
        $co = new Cobra();
        $go = new GoldFish();
        $ar = new Arara();
        
        $m->setPeso(33.5);
        $m->locomover();
        $a->locomover();
        $r->locomover();
        $t->locomover();
        $cach->emitirSom();
        
        ?></pre>
    </body>
</html>
