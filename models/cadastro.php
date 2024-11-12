<?php
 
class Usuario{
    protected $id_usuario;
    protected $nome_completo;
    protected $email;
    protected $cpf;
    protected $senha;
    protected $is_admin;
    protected $livros_emprestados = [];
    const MAX_EMPRESTIMO = 3;
 
    public function __construct($id_usuario, $nome_completo, $email, $cpf, $senha, $is_admin = false) {
        $this->id_usuario = $id_usuario;
        $this->nome_completo = $nome_completo;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->senha = $senha;
        $this->is_admin = $is_admin;
    }
 
    public static function validarEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
 
    public static function cadastrar($nome_completo, $email, $cpf, $senha) {
        if (!self::validarEmail($email)) {
            return "Formato de email inválido.";
        }
        if (!self::validarCPF($cpf)) {
            return "Formato de CPF inválido.";
        }
    }
 
        $query = "SELECT * FROM Usuario WHERE email = :email OR cpf = :cpf";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->execute();
       
        if ($stmt->rowCount() > 0) {
            return "Email ou CPF já cadastrado.";
        }
 
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
 
    public function Administrador() {
            return $this->is_admin;
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
    public function criar($nome, $email){
        return "insert into usuario(nome, cep) values (".this->nome.", ".this->email.");";
    }
    public function ler(){
        return "select * from usuario where nome = ".this->nome.";";
    }
 
    public function atualizar($nome_atualizado){
        return "update usuario set nome = ".$nome_atualizado. "where nome = ".$this->nome.";";
    }
    public function deletar(){
        if (count($this->livros_emprestados) > 0) {
            return "Não é possível excluir o usuário com empréstimos ativos.";
        }
 
        $sql = "DELETE FROM Usuario WHERE id_usuario = :id_usuario";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_usuario', $this->id_usuario);
       
        if ($stmt->execute()) {
            return "Usuário excluído com sucesso.";
        } else {
            return "Erro ao excluir o usuário.";
        }
    }
}
 
?>