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

        <section class="book-section">
            <h3>Livros em Destaque</h3>
            <div class="carousel-container">
                <button class="prev" onclick="moveSlideBooks(-1)" aria-label="Slide anterior dos livros">&#10094;</button>
                <div class="carousel" id="books-carousel">
                    
                    <div class="book-item">
                        <img src="./imgs/ehassimq.jpg" alt="É assim que acaba">
                        <h4>É assim que acaba</h4>
                        <p>Autor: Collen Hoover</p>
                        <p>R$ 30,20</p>
                        <a href="mensagem.php" class="ver-mais">Ver mais
                        </a>
                    </div>
                    <div class="book-item">
                        <img src="./imgs/pelasentranhas.jpg" alt="Pelas entranhas">
                        <h4>Pelas entranhas</h4>
                        <p>Autor: Triz Parizotto</p>
                        <p>R$ 46,90</p>
                        <button>Ver mais</button>
                    </div>
                    <div class="book-item">
                        <img src="./imgs/ann2.jpg" alt="Anne de Green Gables">
                        <h4>Anne de Green Gables</h4>
                        <p>Autor: L. M. Montgomery</p>
                        <p>R$ 31,00</p>
                        <button>Ver mais</button>
                    </div>
                    <div class="book-item">
                        <img src="./imgs/anne.png" alt="O Diário de Anne Frank">
                        <h4>O Diário de Anne Frank</h4>
                        <p>Autora: Anne Frank</p>
                        <p>R$ 30,00</p>
                        <button>Ver mais</button>
                    </div>
                    <div class="book-item">
                        <img src="./imgs/diario-banana.png" alt="O Diário de um Banana">
                        <h4>O Diário de um Banana</h4>
                        <p>Autor: Jeff Kinney</p>
                        <p>R$ 28,12</p>
                        <button>Ver mais</button>
                    </div>
                </div>
                <button class="next" onclick="moveSlideBooks(1)" aria-label="Próximo slide dos livros">&#10095;</button>
            </div>
        </section>
    </div>
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

    <!--interações -->
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
