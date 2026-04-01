<?php
require_once './php/cadastrar_produto.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>
    <link rel="stylesheet" href="./css/bicarbonato.css">
</head>
<body>

    <?php 
    require_once 'partials/header.php';
    ?>

    <section class="section-pdr">
        <div class="produto-container">
            <div class="produto-imagem">
                <img src="./imagens/bicarbonato_de_sodio_.webp" alt="Bicarbonato de Sódio">
            </div>

            <div class="produto-info">

                <h2><?php echo $nome_produto; ?></h2>

                <p class="descricao">
                    <?php echo $desc; ?>
                </p>

                <ul class="caracteristicas">
                    <li>Alta pureza</li>
                    <li>Uso industrial e doméstico</li>
                    <li>Produto seguro e versátil</li>
                    <li>Embalagem resistente</li>
                    <li>Quantidade: 1Kg</li>
                </ul>

                <div class="preco">
                   <?php $preco; ?> 
                </div>

                <button class="btn-carrinho">Adicionar ao Carrinho</button>

            </div>
        </div>


    </section>

    <section class="descricao-completa">

        <h3>Descrição do Produto</h3>

        <p>
           <?php  echo $desc; ?>
        </p>

        <p>
            Sua formulação garante eficiência e segurança, sendo ideal para empresas
            que buscam um produto confiável com excelente desempenho.
        </p>

    </section>

    <?php
        require_once 'partials/footer.php';
    ?>

</body>
</html>