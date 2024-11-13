<?php
require "./config/database.php";
require "./models/Livro.php";

class LivroController{

    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function cadastrarLivro($titulo, $categoria, $isbn){
        $databaae = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);
        $livro->titulo = $titulo;
        $livro->categoria = $categoria;
        $livro->isbn = $isbn;

        if($livro->cadastrarLivro()){
            header('Location: index.php');
            exit()
        }else{
            echo "erro ao cadastrar livro";
        }
    }
}