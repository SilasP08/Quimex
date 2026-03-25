<?php
include 'data.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bicarbonato de Sódio - <?php echo $nomeloja?></title>
    <link rel="stylesheet" href="./css/bicarbonato.css">
</head>

<body>

    <?php 
    require 'partials/header.php';
    ?>

    <section class="section-pdr">
        <div class="produto-container">
            <div class="produto-imagem">
                <img src="./imagens/bicarbonato_de_sodio_.webp" alt="Bicarbonato de Sódio">
            </div>

            <div class="produto-info">

                <h2>Bicarbonato de Sódio</h2>

                <p class="descricao">
                    O bicarbonato de sódio é um composto químico amplamente utilizado
                    em processos industriais, limpeza, alimentos e aplicações químicas.
                    Possui alta pureza, excelente qualidade e ótimo custo-benefício.
                </p>

                <ul class="caracteristicas">
                    <li>Alta pureza</li>
                    <li>Uso industrial e doméstico</li>
                    <li>Produto seguro e versátil</li>
                    <li>Embalagem resistente</li>
                    <li>Quantidade: 1Kg</li>
                </ul>

                <div class="preco">
                    R$ 15,90
                </div>

                <button class="btn-carrinho">Adicionar ao Carrinho</button>

            </div>
        </div>


    </section>

    <section class="descricao-completa">

        <h3>Descrição do Produto</h3>

        <p>
            O bicarbonato de sódio é um composto químico de alta qualidade utilizado
            em diversos setores, como limpeza, indústria química, produção de alimentos
            e manutenção industrial.
        </p>

        <p>
            Sua formulação garante eficiência e segurança, sendo ideal para empresas
            que buscam um produto confiável com excelente desempenho.
        </p>

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