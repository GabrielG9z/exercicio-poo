<?php
require_once "Livro.php";
class Programacao extends Tecnico {
    private $area;
    

    public function getArea()
    {
        return $this->area;
    }

    
    public function setArea($area): self
    {
        $this->area = $area;

        return $this;
    }

    // Método de polimorfismo a assinatura deve ser identica nos parametros e retornos da funcao
    public function formataTitulo():string {

        return "<em style = color:blue>".$this->getTitulo()."</em>";
    }
}
?>