<?php

/**
 * Description of ClientePessoaJurica
 *
 * @copyright (c) year, Domicio Jose - Domicio
 */
class ClientePessoaJurica extends Cliente{
    public $Cnpj;
    public $NomeFantasia;
    
    function setCnpj($Cnpj) {
        $this->Cnpj = $Cnpj;
    }

    function setNomeFantasia($NomeFantasia) {
        $this->NomeFantasia = $NomeFantasia;
    }
    
    function verEndereco() {
        return"<p>Endereco da Pessoa Juridica.<br> Endereço: {$this->Endereco}<br>Bairro: {$this->Bairro}<br>NomeFantasia: {$this->NomeFantasia}<br>CNPJ: {$this->Cnpj}<hr></p>";
    }


}
