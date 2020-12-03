<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body> <pre>
        <?php
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
       
        /*$v1 = new Visitante();
       $v1->setNome ("Marcos");
       $v1->setIdade (33);
       $v1->setSexo("M");
       print_r($v1);*/
       $a1 = new Aluno();
       $a1->setNome("Pedro");
       $a1->setMatricula(1111);
       $a1->setSexo("M");
       $a1->setIdade(16);
       $a1->setCurso("Informática");
       $a1->pagarMensalidade();
       print_r($a1);
       
       $b1 = new Bolsista();
       $b1->setMatricula(1112);
       $b1->setNome("Carlos");
       $b1->setBolsa(12.5);
       $b1->setCurso("Administração");
       $b1->setIdade(20);
       $b1->setSexo('M');
       $b1->pagarMensalidade();
       print_r($b1);
       
       
       
       
       
       
        ?></pre>
    </body>
</html>
