<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><pre>
        <?php
       require_once 'ContaBanco.php';
       $p1 = new ContaBanco(); // Carlos
       $p2 = new ContaBanco(); // Bruna
       $p1->abrirConta("CC");
       $p1->setNumConta(1111);
       $p1->setDono("Carlos");
       $p2->abrirConta("CP");
       $p2->setNumConta(2222); 
       $p2->setDono("Bruna");
       
       $p1->depositar(300);
       $p2->depositar(500);
       
       $p2->sacar(100);
       
       $p1->pagarMensal();
       $p2->pagarMensal();
       
               
       print_r($p1);
       print_r($p2);
        ?>
    </pre>
    </body>
</html>
