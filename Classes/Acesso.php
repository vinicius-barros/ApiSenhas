<?php

require_once "CrudAcesso.php";

class Acesso extends CrudAcesso
{
    protected $tabela = 'categorias';
    
    public function findAll()
    {
        $query = "SELECT *FROM $this->tabela";
        $stm = Connect::query($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
}
