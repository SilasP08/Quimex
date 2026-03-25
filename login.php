<?php
include 'data.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - <?php echo $nomeloja?></title>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <?php 
    require 'partials/header.php';
    ?>

    <section>
        <form action="">
            <div class="mae">

                <section class="card-login">
                    <div class="titulo">
                        <h3>Bem-vindo a <br> Quimex</h3>
                        <img src="./imagens/quimex-removebg-preview.png" class="quimex-card" alt="">
                    </div>
                    <input type="email" placeholder="E-mail">
                    <input type="password" placeholder="Senha">
                    <div class="btn">
                        <a href="./index.php" class="submit-btn">Entrar</a>
                        <button type="reset" class="submit-btn"
                            onclick="alert('Dados Limpos com Sucesso')">Limpar</button>
                    </div>
                    <p>Caso não tenha conta <a href="./cadastro.php">clique aqui</a></p>
                </section>

            </div>

        </form>
    </section>

    <footer class="footer">
        <div class="footer-container">


            <div class="footer-brand">
                <img src="./imagens/quimex-removebg-preview.png" alt="Logo Quimex" class="footer-logo">
                <h2>QUIMEX</h2>
                <p>Soluções em produtos químicos com qualidade e segurança.</p>
            </div>


            <div class="footer-contact">
                <h3>Contato</h3>
                <p>Email: contato@quimex.com</p>
                <p>Telefone: (11) 99999-9999</p>
            </div>


            <div class="footer-address">
                <h3>Endereço</h3>
                <p>Rua das Indústrias, 245</p>
                <p>Centro Empresarial</p>
                <p>São Paulo - SP, 09000-000</p>
            </div>

        </div>


        <div class="footer-bottom">
            <p>© 2026 Quimex - Todos os direitos reservados</p>
        </div>
    </footer>
</body>

</html>