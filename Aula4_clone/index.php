<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Domicio</title>
    </head>
    <body>
        <?php
        require './Nota.php';
        $notas = new Nota();
        
        $notas->setNota("Domicio Jose ", "Matematica", 5, 2);
        echo $notas->getNota();
        
        $notasDois= clone $notas;
        $notasDois->setProva(6);
        $notasDois->setTrabalho(4);
        $notasDois->setDisciplina("História");
        echo $notasDois->getNota();
        ?>
    </body>
</html>
