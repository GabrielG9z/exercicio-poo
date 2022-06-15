<?php
require_once "Livro.php";
class Didatico extends Tecnico {
    private string $disciplina;
    private array $nivel;

    /**
     * Get the value of disciplina
     *
     * @return string
     */
    public function getDisciplina(): string
    {
        return $this->disciplina;
    }

    
    public function setDisciplina(string $disciplina): self
    {
        $this->disciplina = $disciplina;

        return $this;
    }

    /**
     * Get the value of nivel
     *
     * @return array
     */
    public function getNivel(): string
    {
        return implode(",", $this->nivel);
    }

    /**
     * Set the value of nivel
     *
     * @param array $nivel
     *
     * @return self
     */
    public function setNivel(array $nivel): self
    {
        $this->nivel = $nivel;

        return $this;
    }
}
?>