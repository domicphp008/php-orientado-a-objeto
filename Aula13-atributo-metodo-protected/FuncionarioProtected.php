<?php

/**
 * Description of Funcionario
 *
 * @copyright (c) year, Domicio Jose - Domicio
 */
class FuncionarioProtected {
    
    public $Nome;
    private $Salario;
    protected$Bonus;
            
    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setSalario($Salario) {
        $this->Salario = $Salario;
    }
    
    function setBonus() {
         $this->Bonus;
    }

    
    public function verSalario() {
        $this->Salario = $this->validarSalario($this->Salario);
        return "O funcionário {$this->Nome} tem o sálario de R$ {$this->Salario} e o bônus de {$this->Bonus}";
        
    }
    private function validarSalario($Salario) {
        if (is_numeric($Salario) and ($Salario > 0)):
            return $this->Salario = number_format($Salario, '2', ',', '.');
            
            else:
                die('Salario Inválido');
        endif;
    }
    protected function bonus($Bonus) {
          $this->Bonus = number_format($Bonus, '2', ',', '.');


    }
                    
}
   

