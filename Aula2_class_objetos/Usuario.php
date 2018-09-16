<?php

/**
 * Description of Usuario
 *
 * @copyright (c) year, Domicio Jose - Domicio
 */
class Usuario {
    public $Nome;
    public $Email;
    
    function getDadosUser($Nome, $Email){
        return "O usuario {$Nome} tem o e-mail {$Email}";
    }
}
