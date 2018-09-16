<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Domicio Metodos e Atributos</title>
    </head>
    <body>
        <?php
        require './Usuario.php';
        $usuario = new Usuario();
        $usuario->setUsuario("Domicio Jose", "djsreserva@gmail.com ");
        
        echo $usuario->getUsuario();
        
        $usuario->setNota(5, 2);
        echo $usuario->getNota();
        ?>
    </body>
</html>
