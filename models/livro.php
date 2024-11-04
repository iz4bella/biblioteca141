
<?php
class Livro{
    public $titulo;
    public $autor;
    public $genero;
    public $status = "Disponível";
    public $usuario;
 
    public function __construct($livro){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
    }
 
    public function emprestar($usuario){
        if($this->status != "Disponivel"){
            echo 'Livro já está emprestado';
            return;
        }
        $this->status = "Indisponivel";
        $this->usuario = $usuario;
    }
 
    public function devolver(){
        if($this->status == "Disponível"){
            echo 'Ja está aqui.';
            return;
        }
        $this->status = "Disponivel";
        $this->usuario = null;
    }
 
    public function criar(){
        return $query = 'insert into livro(titulo, autor, genero, status_livro) values
        ("'.$this->titulo.'", "'.$this->autor'", "'.$this->genero'", "'.$this->status.'");';
    }
    public function ler(){
        echo "select * from livro where titulo = " .$this->titulo. ";";
    }
    public function atualizar($genero_novo){
 
        $query = "update livro set";
 
        foreach ($arrayColunas as $coluna){
        
            $chave;
 
            /
            $valor;
 
            $query += .$chave. '="'.$valor.'"';
        }
        return $query += 'where titulo = "'.$this->titulo.'";';
 
    }
    public function deletar(){
        echo "delete * from livro where titulo = ".$this->titulo. ";";
    }
}
   
?>