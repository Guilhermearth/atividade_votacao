<?php

class Usuario
{
    private $id;
    private $nome;
    private $cpf;
    private $idade;
    private $voto;
    public $erro = [];

    public function __construct($nome, $cpf, $idade, $voto)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
        $this->voto = $voto;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
         $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getcpf()
    {
        return $this->cpf;
    }

    public function setcpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getvoto()
    {
        return $this->voto;
    }

    public function setvoto($voto)
    {
        $this->voto = $voto;
    }


    public function validarDados()
    {
        if(empty($this->nome)){
            $this->erro["erro_nome"] = "o campo nome está vazio!";
        }

        if($this->idade < 0 || $this->idade > 120 || !is_numeric($this->idade)){
            $this->erro["erro_idade"] = "Idade invalida!";
        }

        if(!is_numeric($this->cpf)){
            $this->erro["erro_cpf"] = "O cpf deve ser número!";
        }

    }
}

?>