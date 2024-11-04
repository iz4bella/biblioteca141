<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./views/style.css">
</head>
<body>
    <header>
        <nav class="container">
            <div class="logo-box">
                <a href="./imgs/icone.png" target="_blank">
                    <img src="./imgs/icone.png" alt="blablabla" class="logo">
                </a>
            </div>
            <div class="parent-link">
                <a href="#" class="social-links">Sobre</a>
                <a href="#" class="social-links">Projetos</a>
                <a href="#" class="social-links">Experiência</a>
                <a href="#" class="social-links">Contato</a>
            </div>
            <div class="icon">
                <a href="./imgs/ig_icone.png" target="_blank" class="sm-icon">
                    <ion-icon name="logo instagram"></ion-icon>
                </a>
                <a href="./imgs/twt.png" target="_blank" class="sm-icon">
                    <ion-icon name="logo twitter"></ion-icon>
                </a>
                <a href="./imgs/github.png" target="_blank" class="sm-icon">
                    <ion-icon name="logo github"></ion-icon>
                </a>
            </div>
        </nav>
    </header>
    <div class="form">
        <form action="#" class="sub-form">
            <div class="upper-form">
                <h2>Formulario login</h2>
                <label for="nome">Nome</label><br>
                <input type="text" id="nome" name="Nome"><br>
                <label for="senha">Senha</label><br>
                <input type="password" id="senha" name="Senha"><br>
                <div class="btn">
                    <button type="submit">Login</button><br>
                    
                </div>
            </div>
            <a href="index.php" class="voltar">Voltar</a>
            <div class="button-form">
                <div class="no-account">
                    Você não tem conta
                    <a href="#" class="Logar">Cadastrar-se</a>
                </div>
                
            </div>
        </form>
        
    </div>           
</body>
</html>

<?php
