<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Domicio</title>
    </head>
    <body>
        <?php
        require './Cliente.php';
        require './ClientePessoaFisica.php';
        require './ClientePessoaJurica.php';
        $cliente = new Cliente();
        $cliente->setEndereco('Rua Rosemary F.  Mattos');
        $cliente->setBairro('Jardim Rosas');
        echo $cliente->verEndereco();
        
        $clientePf =new ClientePessoaFisica();
        $clientePf->setCpf(11066789043);
        $clientePf->setNome('Domício José da Silva');
        $clientePf->setEndereco('Rua Rosemary F.  Mattos');
        $clientePf->setBairro('Jardim Rosas');
        echo $clientePf->verEndereco();
        
        $clientePj = new ClientePessoaJurica();
        $clientePj->setCnpj('00.000.000/000-00');
        $clientePj->setNomeFantasia('Domicio');
        $clientePj->setEndereco('Rua Rosemary F. Matos');
        $clientePj->setBairro('Jardim Rosas');
        echo $clientePj->verEndereco();
        ?>
    </body> 
    
</html>
