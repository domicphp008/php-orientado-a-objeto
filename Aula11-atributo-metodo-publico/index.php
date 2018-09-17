<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Domicio</title>
    </head>
    <body>
        <?php
        require './Funcionario.php';
        
        $funcionario = new Funcionario();
        $funcionario->setNome("Domicio");
        $funcionario->setSalario("5200");
        echo $funcionario->verSalario();
        ?>
    </body>
</html>
