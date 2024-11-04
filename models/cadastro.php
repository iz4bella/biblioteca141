<?php
 
class Usuario{
    protected $nome;
    protected $cep;
    protected $livros_emprestados = [];
    const MAX_EMPRESTIMOS = 3;
 
    public function __construct($nome, $cep){
        $this->nome= $nome;
        $this->cep= $cep;
    }
 
    public function emprestar ($livro){
        if(count($this->livros_emprestados) < self::MAX_EMPRESTIMO){
            array_push($this->livros_emprestados, $livro);
            return;
        }
    }
    public function devolver($livro){
        if(in_array($livro, $this->livros_emprestados)){
            $position = array_search($livro, $this->livros_emprestados);
            unset($this->livros_emprestados($position));
        }
    }
    public function criar($nome, $cep){
        return "insert into usuario(nome, cep) values (".this->nome.", ".this->cep.");";
    }
    public function ler(){
        return "select * from usuario where nome = ".this->nome.";";
    }
 
    public function atualizar($nome_atualizado){
        return "update usuario set nome = ".$nome_atualizado "where nome = ".$this->nome.";";
    }
    public function deletar(){
        return "delete nome from usuario where = ".$this->nome.";";
    }
 
}
 
?>
 