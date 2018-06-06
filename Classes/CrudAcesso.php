<?php

require_once "Connect.php";

abstract class CrudAcesso extends Connect
{
	protected $tabela;
    private $link;
    private $nome;
    private $senha;
    
    public function setLink($link)
    {
        $this->link = $link;
    }

    public function getLink ()
    {
        return $this->link;
    }
    
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome ()
    {
        return $this->nome;
    }
    
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getSenha ()
    {
        return $this->senha;
    }
}