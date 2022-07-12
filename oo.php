<?php

class Animal
{
    private $tamanho;
    private $idade;
    private $peso;

    public function __construct($tamanho, $idade, $peso)
    {
        $this->tamanho = $tamanho;
        $this->idade = $idade;
        $this->peso = $peso;
    }
    public function get_tamanho()
    {
        return $this->tamanho;
    }
    public function get_idade()
    {
        return $this->idade;
    }

    public function get_peso()
    {
        return $this->peso;
    }
}

// $meuGato = new Animal("1.2m", "1 ano","2kg");
// echo $meuGato->get_tamanho();
// echo "<br>";
// echo $meuGato->get_idade();
// echo "<br>";
// echo $meuGato->get_peso();
// echo "<br>";

