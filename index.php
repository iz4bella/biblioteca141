<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca141</title>
    <link rel="stylesheet" href="style2.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
</head>
<body>
 
    <div class="container">
        <header>
            <h1>Bem-vindo à Biblioteca141</h1>
            <p>Explore os melhores livros, de novos lançamentos a clássicos.</p>
        </header>

    
        <nav class="navbar">
            <ul>
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="categorias.php"><i class="fas fa-th-list"></i> Categorias</a></li>
                <li><a href="livros.php"><i class="fas fa-book-open"></i> Livros</a></li>
                <li><a href="login.php" class="login-btn"><i class="fas fa-sign-in-alt"></i> Login</a></li>
            </ul>
        </nav>

      
        <section class="search-section">
            <input type="text" placeholder="Pesquise por título, autor ou categoria..." class="search-input">
            <button class="search-btn"><i class="fas fa-search"></i> Buscar</button>
        </section>

        <!-- Rodapé -->
        <footer>
            <p>&copy; 2024 Biblioteca141. Todos os direitos reservados.</p>
            <div class="footer-links">
                <a href="sobre.php"><i class="fas fa-info-circle"></i> Sobre</a>
                <a href="contato.php"><i class="fas fa-envelope"></i> Contato</a>
                <a href="termos.php"><i class="fas fa-file-contract"></i> Termos de Serviço</a>
            </div>
        </footer>
    </div>

    <!-- Script para interações -->
    <script>
        document.querySelector('.search-btn').addEventListener('click', function() {
            let query = document.querySelector('.search-input').value;
            if(query) {
                window.location.href = `pesquisa.php?query=${encodeURIComponent(query)}`;
            } else {
                alert('Por favor, insira um termo de pesquisa.');
            }
        });
    </script>
</body>
</html>
