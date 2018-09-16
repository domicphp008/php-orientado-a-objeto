<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Domicio</title>
    </head>
    <body>
        <?php
        if(phpversion() >= 7.0) :
            echo phpversion() . " - Olá mundo";
            else:
                echo phpversion() . " - Necessário atualizar o PHP";
        endif;
        
        echo "<hr>";
        echo ini_get('date.timezone') . "<br>";
        echo date('d/m/Y/H:i:s') . "<br>";
        ?>
    </body>
</html>
