<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Biblioteca 141</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <nav class="navigation">
        <h1>Biblioteca-141</h1>
        <ul>
            <li><a href="#">Home</a></li>
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
    <div class="content">
        <!-- Hero Section -->
        <section class="hero">
            <h2>Encontre o Livro Perfeito para Você!</h2>
            <p>Explore nossa vasta coleção de livros, desde os mais recentes lançamentos até os clássicos atemporais.</p>
        </section>

        <!-- Categorias -->
        <section class="categories">
            <h3>Categorias</h3>
            <div class="carousel-container">
                <button class="prev" onclick="moveSlideCategories(-1)" aria-label="Slide anterior das categorias">&#10094;</button>
                <div class="carousel" id="categories-carousel">
                    <div class="category-item">
                        <img src="./imgs/fiçção.png" alt="Ficção">
                        <h4>Ficção</h4>
                        <a href="#">Ver mais</a>
                    </div>
                    <div class="category-item">
                        <img src="./imgs/ajuda2.png.png" alt="Autoajuda">
                        <h4>Autoajuda</h4>
                        <a href="#">Ver mais</a>
                    </div>
                    <div class="category-item">
                        <img src="./imgs/fantasia.png" alt="Fantasia">
                        <h4>Fantasia</h4>
                        <a href="#">Ver mais</a>
                    </div>
                    <div class="category-item">
                        <img src="./imgs/romance.png" alt="Romance">
                        <h4>Romance</h4>
                        <a href="#">Ver mais</a>
                    </div>
                </div>
                <button class="next" onclick="moveSlideCategories(1)" aria-label="Próximo slide das categorias">&#10095;</button>
            </div>
        </section>

        <!-- Livros em Destaque -->
        <section class="book-section">
            <h3>Livros em Destaque</h3>
            <div class="carousel-container">
                <button class="prev" onclick="moveSlideBooks(-1)" aria-label="Slide anterior dos livros">&#10094;</button>
                <div class="carousel" id="books-carousel">
                    <div class="book-item">
                        <img src="./imgs/it-a-coisa.png" alt="It a Coisa">
                        <h4>It a Coisa</h4>
                        <p>Autor: Stephen King</p>
                        <p>R$ 39,20</p>
                        <a href="livro.php" class="Comprar">Comprar
                        </a>
                         
                         
                    </div>
                    <div class="book-item">
                        <img src="./imgs/pijama.png" alt="O Menino do Pijama Listrado">
                        <h4>O Menino do Pijama Listrado</h4>
                        <p>Autor: John Boyne</p>
                        <p>R$ 25,15</p>
                        <button>Comprar</button>
                    </div>
                    <div class="book-item">
                        <img src="./imgs/fodase.png" alt="A Sutil Arte de Ligar o Foda-se">
                        <h4>A Sutil Arte de Ligar o Foda-se</h4>
                        <p>Autor: Mark Manson</p>
                        <p>R$ 28,15</p>
                        <button>Comprar</button>
                    </div>
                    <div class="book-item">
                        <img src="./imgs/anne.png" alt="O Diário de Anne Frank">
                        <h4>O Diário de Anne Frank</h4>
                        <p>Autora: Anne Frank</p>
                        <p>R$ 30,00</p>
                        <button>Comprar</button>
                    </div>
                    <div class="book-item">
                        <img src="./imgs/diario-banana.png" alt="O Diário de um Banana">
                        <h4>O Diário de um Banana</h4>
                        <p>Autor: Jeff Kinney</p>
                        <p>R$ 28,12</p>
                        <button>Comprar</button>
                    </div>
                </div>
                <button class="next" onclick="moveSlideBooks(1)" aria-label="Próximo slide dos livros">&#10095;</button>
            </div>
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


    <script>
        // Função para mover o carrossel de Livros
        var currentBookSlide = 0;
        function moveSlideBooks(direction) {
            var carousel = document.getElementById('books-carousel');
            var totalBooks = carousel.children.length;
            var slideWidth = carousel.children[0].offsetWidth;

            currentBookSlide += direction;
            if (currentBookSlide < 0) currentBookSlide = totalBooks - 1;
            if (currentBookSlide >= totalBooks) currentBookSlide = 0;

            carousel.style.transform = 'translateX(' + (-currentBookSlide * slideWidth) + 'px)';
        }

        // Função para mover o carrossel de Categorias
        var currentCategorySlide = 0;
        function moveSlideCategories(direction) {
            var carousel = document.getElementById('categories-carousel');
            var totalCategories = carousel.children.length;
            var slideWidth = carousel.children[0].offsetWidth;

            currentCategorySlide += direction;
            if (currentCategorySlide < 0) currentCategorySlide = totalCategories - 1;
            if (currentCategorySlide >= totalCategories) currentCategorySlide = 0;

            carousel.style.transform = 'translateX(' + (-currentCategorySlide * slideWidth) + 'px)';
        }

        // Função para mover o carrossel do Banner
        var currentBannerSlide = 0;
        function moveSlideBanner(direction) {
            var carousel = document.getElementById('banner-carousel');
            var totalBanners = carousel.children.length;
            var slideWidth = carousel.children[0].offsetWidth;

            currentBannerSlide += direction;
            if (currentBannerSlide < 0) currentBannerSlide = totalBanners - 1;
            if (currentBannerSlide >= totalBanners) currentBannerSlide = 0;

            carousel.style.transform = 'translateX(' + (-currentBannerSlide * slideWidth) + 'px)';
        }

        // Inicializa os carrosséis
        window.onload = function() {
            moveSlideBooks(0);
            moveSlideCategories(0);
            moveSlideBanner(0);
        }
    </script>
</body>
</html>
