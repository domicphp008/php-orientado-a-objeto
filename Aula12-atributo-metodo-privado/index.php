<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Domicio</title>
    </head>
    <body>
        <?php
        require './FuncionarioPrivado.php';
        
        $funcionario = new FuncionarioPrivado();
        $funcionario->setNome("Domicio");
        $funcionario->setSalario("7200");
        echo $funcionario->verSalario();
        ?>
    </body>
</html>
