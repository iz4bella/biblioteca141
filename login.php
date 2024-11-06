<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./views/style.css">
</head>
<body>
    <!-- Início do Cabeçalho -->
    <header>
        <nav class="container">
            <!-- Logo -->
            <div class="logo-box">
                <a href="./index.php">
                    <img src="./imgs/icone.png" alt="Logo" class="logo">
                </a>
            </div>
            <!-- Links de navegação -->
            <div class="parent-link">
                <a href="#" class="social-links">Sobre</a>
                <a href="#" class="social-links">Projetos</a>
                <a href="#" class="social-links">Experiência</a>
                <a href="#" class="social-links">Contato</a>
            </div>
            <!-- Ícones sociais -->
            <div class="social-icons">
                <a href="#" class="social-icon"><img src="./imgs/ig_icone.png" alt="Instagram"></a>
                <a href="#" class="social-icon"><img src="./imgs/Twitter-Logo.png" alt="Twitter"></a>
                <a href="#" class="social-icon"><img src="./imgs/github.png" alt="GitHub"></a>
            </div>
        </nav>
    </header>
    <!-- Fim do Cabeçalho -->

    <!-- Formulário de Login -->
    <div class="form">
        <form action="#" class="sub-form">
            <div class="upper-form">
                <h2>Formulario de Login</h2>

                <!-- Campo de Nome -->
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="Nome" required><br>

                <!-- Campo de Senha -->
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="Senha" required><br>

                <!-- Link para o botão de Login -->
                <a href="home.php" class="custom-link">Login</a>
            </div>

            <!-- Botão de Voltar -->
            <a href="index.php" class="voltar">Voltar</a>

            <!-- Seção de Cadastrar-se -->
            <div class="button-form">
                <p>Você não tem conta? <a href="#" class="Logar">Cadastrar-se</a></p>
            </div>
        </form>
    </div>           
</body>
</html>
