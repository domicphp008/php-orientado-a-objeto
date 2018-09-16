<?php

/**
 * Description of ChequeComum
 *
 * @copyright (c) year, Domicio Jose - Domicio
 */
class ChequeComum extends Cheque{
    
    function calcularJuros(){
        $this->Valor = $this->Valor * 1.25;
        $this->Valor = parent::real($this->Valor);
        
        return "Valor do  cheque {$this->Tipo} : R$ {$this->Valor}<hr>";
    }
}
