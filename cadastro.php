<?php
require_once 'init.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - <?php echo $nomeloja?></title>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <?php 
    require_once 'partials/header.php';
    ?>

    <section>
        <div class="mae">

            <section class="card-login">
                <div class="titulo">
                    <h3>cadastro <br> Quimex</h3>
                    <img src="./imagens/quimex-removebg-preview.png" class="quimex-card" alt="">
                </div>
                <input type="text" placeholder="Nome completo">
                <input type="email" placeholder="E-mail">
                <input type="password" placeholder="Senha">
                <input type="password" placeholder="Confirme sua Senha">
                <div class="btn">
                    <a href="./index.php" class="submit-btn">Cadastrar-se</a>
                    <button type="reset" class="submit-btn" onclick="alert('Dados Limpos com Sucesso')">Limpar</button>
                </div>
                <p>Caso já tenha conta <a href="./login.php">clique aqui</a></p>
            </section>

        </div>

        </form>
    </section>
    <form action="">


    <?php
        require_once 'partials/footer.php';
    ?>
</body>

</html>