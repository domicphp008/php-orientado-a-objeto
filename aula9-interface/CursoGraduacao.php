<?php

/**
 * Description of CurosGraduacao
 *
 * @copyright (c) year, Domicio Jose - Domicio
 */
class CursoGraduacao implements ICurso {
    
    public $NomeDisciplina;
    public $NomeProfessor;
    
    public function disciplina($NomeDisciplina) {
        $this->NomeDisciplina = $NomeDisciplina;
        return "Disciplina: {$this->NomeDisciplina} <br>";
        
    }

    public function professor($NomeProfessor) {
       $this->NomeProfessor = $NomeProfessor;
       return "Professor: {$this->NomeProfessor} <hr>";
        
    }

}
