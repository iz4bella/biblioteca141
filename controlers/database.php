<?php

class Banco{
    const host= 'localhost';
    const banco= 'biblioteca141';
    const usuario = 'rost';
    const senha = '';
    public $conexao;


    public function conectar(){
        $this->conexao = new mysqli( self::host, self ::usuario, self::senha, self::banco);
        return $this->conexao;
    }
}