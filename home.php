<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <nav class="navigation">
        
        <h1>Biblioteca-141</h1>

        
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Categorias</a></li>
            <li><a href="#">Usuário</a></li>
        </ul>

        
        <div class="search-container">
            <input type="text" placeholder="Pesquisar" id="Pesquisar" class="search-input">
            <label for="Pesquisar" class="search-icon">
                <img src="./imgs/lupa.png" alt="Ícone de pesquisa">
            </label>
        </div>
    </nav>

    
    <div class="content">
    <section class="hero">
            <h2>Encontre o Livro Perfeito para Você!</h2>
            <p>Explore nossa vasta coleção de livros, desde os mais recentes lançamentos até os clássicos atemporais.</p>
        </section>

        <div class="categories">
    <h3>Categorias</h3>
    <div class="carousel-container">
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <div class="carousel">
            <div class="category-item">
                <img src="" alt="Categoria 1">
                <h4>Categoria 1</h4>
                <a href="#">Ver mais</a>
            </div>
            <div class="category-item">
                <img src="" alt="Categoria 2">
                <h4>Categoria 2</h4>
                <a href="#">Ver mais</a>
            </div>
            <div class="category-item">
                <img src="" alt="Categoria 3">
                <h4>Categoria 3</h4>
                <a href="#">Ver mais</a>
            </div>
            <div class="category-item">
                <img src="" alt="Categoria 4">
                <h4>Categoria 4</h4>
                <a href="#">Ver mais</a>
            </div>
        </div>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
    </div>
</div>


<div class="book-section">
    <h3>Livros em Destaque</h3>
    <div class="carousel-container">
        <button class="prev" onclick="moveSlideBooks(-1)">&#10094;</button>
        <div class="carousel">
            <div class="book-item">
                <img src="./imgs/it-a-coisa.png" alt="Livro 1">
                <h4>It a coisa </h4>
                <p>Autor: Stephean King </p>
                <p> 39,20R$</p>
                <button>Comprar</button>
            </div>
            <div class="book-item">
                <img src="./imgs/pijama.png" alt="Livro 2">
                <h4>O menino do pijama listrado</h4>
                <p>Autor: John Boyne</p>
                <p> 25,15R$</p>
                <button>Comprar</button>
            </div>
            <div class="book-item">
                <img src="./imgs/fodase.png" alt="Livro 3">
                <h4>A sutil arte de ligar o foda-se</h4>
                <p>Autor: Mark Manson</p>
                <p>28,15R$</p>
                <button>Comprar</button>
            </div>
            <div class="book-item">
                <img src="./imgs/anne.png" alt="Livro 4">
                <h4>O diario de anne frank</h4>
                <p>Autora: Anne Frank</p>
                <p>30R$</p>
                <button>Comprar</button>
            </div>
        </div>
        <button class="next" onclick="moveSlideBooks(1)">&#10095;</button>
    </div>
</div>
        
    </div>
</body>
</html>
