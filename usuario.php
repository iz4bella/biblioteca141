<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário - Biblioteca-141</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>

    <!-- Navegação -->
    <nav class="navigation">
        <h1>Biblioteca-141</h1>
        <ul>
            <li><a href="home.php" class="home">Home</a></li>
            <li><a href="#">Categorias</a></li>
            <li><a href="usuario.php" class="usuario">Usuário</a></li>
        </ul>
        <div class="search-container">
            <input type="text" placeholder="Pesquisar" id="Pesquisar" class="search-input">
            <label for="Pesquisar" class="search-icon">
                <img src="./imgs/lupa.png" alt="Ícone de pesquisa">
            </label>
        </div>
    </nav>

    <!-- Perfil do Usuário -->
    <section class="perfil-usuario">
        <div class="container">
          
            <div class="perfil-header">
                <div class="foto-perfil">
                    <img src="./imgs/miguel.png" alt="Foto de Perfil" id="foto-perfil">
                    <input type="file" id="upload-foto" class="upload-foto" accept="image/*" onchange="trocarFoto()">
                    <label for="upload-foto" class="botao-foto">Alterar Foto</label>
                </div>

       
                <div class="informacoes-usuario">
                    <h2>guel west</h2>
                    <p class="email">miguelzin@gmail.com</p>
                    <button class="editar-info" onclick="editarPerfil()">Editar Perfil</button>
                </div>
            </div>

            <!-- Playlists de Livros -->
            <div class="playlists">
                <h3>Minhas Playlists de Livros</h3>
                <div class="playlist-container">
                    <div class="playlist-item">
                        <img src="./imgs/playlist1.png" alt="Livro 1">
                        <h4>Minha Playlist 1</h4>
                        <p>Lista com livros favoritos.</p>
                        <button onclick="editarPlaylist(1)">Editar</button>
                        <button onclick="removerPlaylist(1)">Excluir</button>
                    </div>
                    <div class="playlist-item">
                        <img src="./imgs/playlist2.png" alt="Livro 2">
                        <h4>Minha Playlist 2</h4>
                        <p>Livros para ler nas férias.</p>
                        <button onclick="editarPlaylist(2)">Editar</button>
                        <button onclick="removerPlaylist(2)">Excluir</button>
                    </div>
                    <div class="playlist-item">
                        <img src="./imgs/playlist3.png" alt="Livro 3">
                        <h4>Minha Playlist 3</h4>
                        <p>Livros de ficção científica.</p>
                        <button onclick="editarPlaylist(3)">Editar</button>
                        <button onclick="removerPlaylist(3)">Excluir</button>
                    </div>
                </div>
                <button class="criar-playlist" onclick="criarPlaylist()">Criar Nova Playlist</button>
            </div>

            <!-- Livros Recomendados -->
            <div class="livros-recomendados">
                <h3>Livros Recomendados</h3>
                <div class="livro-item" id="livro1">
                    <img src="./imgs/pessoal.png" alt="Livro 4">
                    <h4>Como Fazer Amigos E Influenciar Pessoas</h4>
                    <p>Uma ótima leitura sobre desenvolvimento pessoal.</p>
                    <button class="adicionar-favoritos" onclick="adicionarFavoritos(1)">Adicionar aos Favoritos</button>
                </div>
                <div class="livro-item" id="livro2">
                    <img src="./imgs/fiçção2.png" alt="Livro 5">
                    <h4>A guerra dos mundos</h4>
                    <p>Recomendado para quem gosta de ficção histórica.</p>
                    <button class="adicionar-favoritos" onclick="adicionarFavoritos(2)">Adicionar aos Favoritos</button>
                </div>
            </div>

        </div>
    </section>

   
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
        // Função para alterar a foto de perfil
        function trocarFoto() {
            var file = document.getElementById('upload-foto').files[0];
            var reader = new FileReader();

            reader.onloadend = function() {
                document.getElementById('foto-perfil').src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        
        function editarPerfil() {
            alert("Você está editando o perfil!");
         
        }

      
        function editarPlaylist(playlistId) {
            alert("Editando Playlist " + playlistId);
          
        }

      
        function removerPlaylist(playlistId) {
            if (confirm("Tem certeza que deseja excluir esta playlist?")) {
                document.getElementById("playlist" + playlistId).remove();
            }
        }

       
        function criarPlaylist() {
            alert("Abrindo formulário para criar uma nova playlist!");
          
        }

   
        function adicionarFavoritos(livroId) {
            let livro = document.getElementById("livro" + livroId);
            livro.classList.toggle("favorito");
            alert("Livro " + livroId + " adicionado aos favoritos!");
            
        }
    </script>
</body>
</html>
