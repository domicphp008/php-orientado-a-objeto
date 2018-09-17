<?php

/**
 * Description of Bonus
 *
 * @copyright (c) year, Domicio Jose - Domicio
 */
class Bonus extends FuncionarioProtected {
    
    public function verSalario() {
        
        parent::bonus(2500);
        return parent::verSalario();
        
    }
}
