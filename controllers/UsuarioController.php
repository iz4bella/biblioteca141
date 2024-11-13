<?php
session_start();
require "./config/database.php";

class UsuarioController {
    public function login($email, $senha) {
        $database = new Banco();
        $bd = $database->conectar();

        $query = "SELECT * FROM Usuario WHERE email = ? AND senha = ?";
        $stmt = $bd->prepare($query);
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $usuario = $result->fetch_assoc();
            
            
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];
            
            header('Location: usuario.php');
        } else {
            echo "Email ou senha incorretos.";
        }
    }
}
?>