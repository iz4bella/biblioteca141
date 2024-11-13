<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Livro</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>
<nav class="navigation">
        <h1>Biblioteca-141</h1>
        <ul>
            <li><a href="#home.php">Home</a></li>
            <li><a href="#">Categorias</a></li>
            <li><a href="usuario.php" class="usuario">Usuário</a></li>
        </ul>
        <div class="search-container">
            <input type="text" placeholder="Pesquisar" id="Pesquisar" class="search-input">
            <label for="Pesquisar" class="search-icon" aria-label="Ícone de pesquisa">
                <img src="./imgs/lupa.png" alt="Ícone de pesquisa">
            </label>
        </div>
    </nav>

<div class="container">
    <div class="book-info">
        <img src="./imgs/it-a-coisa.png" alt="Capa do Livro" class="book-cover">
        <div class="book-details">
            <h2 class="book-title">IT A COISA</h2>
            <p class="book-author"><strong>Autor:</strong> Stephen King </p>
            <p class="book-genre"><strong>Gênero:</strong> Ficção Científica</p>
            <p class="book-description">
            Durante as férias de 1958, em uma pacata cidadezinha chamada Derry, um grupo de sete amigos começa a ver coisas estranhas. Um conta que viu um palhaço, outro que viu uma múmia. Finalmente, acabam descobrindo que estavam todos vendo a mesma coisa: um ser sobrenatural e maligno que pode assumir várias formas.
            </p>
        </div>
    </div>

    <div class="actions">
        <a href="compra" class="action-btn">Comprar</a>
        <a href="emprestimo.php" class="action-btn loan-btn">Pedir Emprestado</a>
    </div>

    <section class="reviews">
        <h3>Comentários </h3>
        <div class="review">
            <p><strong>Caique Flores:</strong> ★★★★★</p>
            <p>Uma ótima história!</p>
        </div>
        <div class="review">
            <p><strong>Gabriella Santos:</strong> ★★★★★</p>
            <p>Adorei o enredo, mas achei o final um pouco previsível. No geral achei o livro muito bom!!.</p>
        </div>
        <a href="avaliacoes.html" class="action-btn">Ver todos os comentários </a>
    </section>

    <section class="author-info">
        <h3>Sobre o Autor</h3>
        <p>O autor, Stephen King , é um renomado escritor de ficção científica, conhecido por suas obras inovadoras e pela habilidade de criar mundos complexos e cativantes. Ele tem mais de 10 livros publicados e é considerado uma referência no gênero.</p>   
    </section>

</div>

<footer>
    <div class="footer-container">
        <div class="footer-links">
            <h3>Links Rápidos</h3>
            <ul>
                <li><a href="#">Sobre nós</a></li>
                <li><a href="#">Projetos</a></li>
                <li><a href="#">Experiência</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>
        
        <div class="footer-social">
            <h3>Redes Sociais</h3>
            <ul>
                <li><a href="https://www.instagram.com" target="_blank">
                    <img src="./imgs/ig_icone.png" alt="Instagram" class="social-icon">
                </a></li>
                <li><a href="https://twitter.com" target="_blank">
                    <img src="./imgs/Twitter-Logo.png" alt="Twitter" class="social-icon">
                </a></li>
                <li><a href="https://github.com" target="_blank">
                    <img src="./imgs/github.png" alt="GitHub" class="social-icon">
                </a></li>
            </ul>
        </div>
        
        <div class="footer-contact">
            <h3>Contato</h3>
            <p>Email: <a href="mailto:contato@dominio.com">Higuinha@gmail.com</a></p>
            <p>Telefone: (67) 56311-8969</p>
        </div>
    </div>
    
    <div class="footer-bottom">
        <p>&copy; 2024 Biblioteca141. Todos os direitos reservados.</p>
    </div>
</footer>

</body>
</html>
