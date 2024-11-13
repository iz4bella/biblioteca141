<?php
class Livro{
    protected $titulo;
    protected $categoria;
    protected $isbn;
    protected $status_livro = "Disponível";
    protected $usuario;
 
    public function __construct($titulo, $categoria, $isbn) {
        $this->titulo = $titulo;
        $this->categoria = $categoria;
        $this->isbn = $isbn;
    }
 
    public function emprestar($usuario){
        if($this->status_livro != "Disponivel"){
            echo 'Livro já está emprestado';
            return;
        }
        $this->status_livro = "Indisponivel";
        $this->usuario = $usuario;
    }
 
    public function devolver(){
        if($this->status_livro == "Disponível"){
            echo 'Ja está aqui.';
            return;
        }
        $this->status_livro = "Disponivel";
        $this->usuario = null;
    }
 
    public function criar($conexao){
        $checkQuery = 'SELECT * FROM livro WHERE isbn = "' . $this->isbn . '";';
        $result = mysqli_query($conexao, $checkQuery);
        if (mysqli_num_rows($result) > 0) {
            echo "Erro: ISBN já cadastrado!";
            return;
        }
        $query = 'INSERT INTO livro (titulo, isbn, categoria, status_livro) VALUES ("' . $this->titulo . '", "' . $this->isbn . '", "' . $this->categoria . '", "' . $this->status_livro . '");';
        mysqli_query($conexao, $query);
    }
 
    public function ler($conexao){
        echo "SELECT * FROM livro WHERE titulo = " .$this->titulo. ";";
    }
   
    public function atualizar($conexao, $valores) {
        $checkQuery = 'SELECT * FROM livro WHERE isbn = "' . $this->isbn . '";';
        $result = mysqli_query($conexao, $checkQuery);
        if (mysqli_num_rows($result) === 0) {
            echo "Erro: Livro não encontrado!";
            return;
        }
 
        $query = 'UPDATE livro SET ';
        foreach ($valores as $coluna => $valor) {
            if ($coluna !== 'isbn') {
                $query .= $coluna . ' = "' . $valor . '", ';
            }
        }
        $query = rtrim($query, ', ') . ' WHERE isbn = "' . $this->isbn . '";';
        mysqli_query($conexao, $query);
    }
    public function deletar($conexao){
        $checkQuery = 'SELECT * FROM livro WHERE isbn = "' . $this->isbn . '" AND status = "Indisponível";';
        $result = mysqli_query($conexao, $checkQuery);
        if (mysqli_num_rows($result) > 0) {
            echo "Erro: Não é possível excluir um livro que está emprestado!";
            return;
        }
 
        $query = 'DELETE FROM livro WHERE isbn = "' . $this->isbn . '";';
        mysqli_query($conexao, $query);
    }
}
   
?>