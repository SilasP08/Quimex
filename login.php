<?php
require_once 'init.php';
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
    require_once 'partials/header.php';
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

    <?php
        require_once 'partials/footer.php';
    ?>
</body>

</html>