<?php
require_once "Livro.php";
class Programacao extends Tecnico {
    private $area;
    

    /**
     * Get the value of area
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set the value of area
     */
    public function setArea($area): self
    {
        $this->area = $area;

        return $this;
    }
}
?>