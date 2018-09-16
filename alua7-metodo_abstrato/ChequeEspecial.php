<?php

/**
 * Description of ChequeEspecial
 *
 * @copyright (c) year, Domicio Jose - Domicio
 */
class ChequeEspecial extends Cheque {
    function calcularJuros (){
        $this->Valor = $this->Valor * 1.10;
        $this->Valor = parent::real($this->Valor);
        
        return "Valor do cheque {$this->Tipo}: R$ {$this->Valor}";
    }
    
}
