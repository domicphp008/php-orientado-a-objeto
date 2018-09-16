<?php

/**
 * Description of ClientePessoaFisica
 *
 * @copyright (c) year, Domicio Jose - Domicio
 */
class ClientePessoaFisica extends Cliente {
    public $Cpf;
    public $Nome;
    
    function setCpf($Cpf) {
        $this->Cpf = $Cpf;
    }

    function setNome($Nome) {
        $this->Nome = $Nome;
    }
    
    function verEndereco() {
        return "<p>Endereco da Pessoa Fisica.<br> Endereço: {$this->Endereco}<br>Bairro: {$this->Bairro}<br>Nome: {$this->Nome}<br>CPF: {$this->Cpf}<hr></p>";
        
    }


}
