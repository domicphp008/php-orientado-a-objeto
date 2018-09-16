<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Domicio</title>
    </head>
    <body>
        <?php
        require './Cheque.php';
        require './ChequeComum.php';
        require './ChequeEspecial.php';
        
        //$cheque = new Cheque(100 . 10, "comum");
        //echo $cheque->verValor();
        $chequeComum = new ChequeComum(100.10, "comum");
        echo  $chequeComum->calcularJuros();
        
        $chequeEpecial = new ChequeEspecial('100.10', 'especial');
        echo $chequeEpecial->calcularJuros();
 ?>
    </body>
</html>
