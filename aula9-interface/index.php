<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Domicio</title>
    </head>
    <body>
        <?php
        require './ICurso.php';
        require './CursoGraduacao.php';
        require './CuroPosGraduacao.php';
        
        $curso = new CursoGraduacao();
        echo $curso->disciplina("Desenvolvimento WEB");
        echo $curso->professor("Domicio Jose");
        
        $cursoPosGrad = new CuroPosGraduacao();
        echo $cursoPosGrad->disciplina("Rede");
        echo $cursoPosGrad->professor("Kelliy");
        
         ?>
    </body>
</html>
