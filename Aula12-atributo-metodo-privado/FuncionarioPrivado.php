<?php

/**
 * Description of Funcionario
 *
 * @copyright (c) year, Domicio Jose - Domicio
 */
class FuncionarioPrivado{
    public $Nome;
    private $Salario;
    
    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setSalario($Salario) {
        $this->Salario = $Salario;
    }

    public function verSalario() {
        $this->Salario = $this->validarSalario($this->Salario);
        return "O funcionário {$this->Nome} tem o sálario de R$ {$this->Salario}";
        
    }
    private function validarSalario($Salario) {
        if (is_numeric($Salario) and ($Salario > 0)):
            return $this->Salario = number_format($Salario, '2', ',', '.');
            
            else:
                die('Salario Inválido');
        endif;
    }
}
