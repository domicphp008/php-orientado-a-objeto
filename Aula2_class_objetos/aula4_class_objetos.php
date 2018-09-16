<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Domicio</title>
    </head>
    <body>
        <?php
            require './Usuario.php';
            $usuario = new Usuario();
            echo $usuario->getDadosUser("Domicio Jose", "djsreserva@gmail.com")
        ?>
    </body>
</html>
 