<?php 
include 'data.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title> <?php echo $nomeloja; ?> </title>
</head>

<body>
   
    <?php 
    require 'partials/header.php';
    ?>

    <script>
        window.onscroll = function () {
            const header = document.querySelector('.topo');

            if (window.scrollY > 350) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        };
    </script>

    <main>
        <section class="imagem-fundo">
            <div class="conteiner">
                <p><b>Quimex — A loja certa para quem precisa de química</b></p>
                <p>A Quimex é uma empresa especializada na venda de produtos químicos para diversos segmentos, como
                    indústrias, empresas de limpeza, laboratórios e uso profissional. Nosso objetivo é oferecer produtos
                    de qualidade, com segurança, confiança e preços acessíveis, atendendo desde pequenas quantidades até
                    pedidos maiores.</p>
                <p>Na Quimex, acreditamos que qualidade e confiança são essenciais. Por isso, buscamos sempre oferecer
                    um atendimento rápido, transparente e eficiente, ajudando nossos clientes a encontrar exatamente o
                    que precisam.</p>
            </div>
        </section>
    </main>


    <section class="area-produto" id="Produtos">
        <div class="Produtos">
            <h1>Produtos</h1>

            <div class="linha-produtos">

                <div class="card-produto">
                    <img class="img-padrao" src="./imagens/acetona.webp" alt="">
                    <h3>Acetona P.A. 1 Litro</h3>
                    <p>R$ 59,90</p>
                    <a href="bicarbonato.php" class="btn-card">COMPRAR</a>
                </div>

                <div class="card-produto">
                    <img class="img-padrao" src="./imagens/cloro.jpg" alt="">
                    <h3>Hipoclorito de Sódio (Cloro) 5L</h3>
                    <p>R$ 34,90</p>
                    <a href="bicarbonato.php" class="btn-card">COMPRAR</a>
                </div>

                <div class="card-produto">
                    <img class="img-padrao" src="./imagens/bicarbonato_de_sodio_.webp" alt="">
                    <h3>Bicarbonato de Sódio 1kg</h3>
                    <p>R$ 15,90</p>
                    <a href="bicarbonato.php" class="btn-card">COMPRAR</a>
                </div>

                <div class="card-produto">
                    <img class="img-padrao" src="./imagens/sodacaustica.webp" alt="">
                    <h3>Soda Cáustica Escamas 99% 1kg</h3>
                    <p>R$ 19,90</p>
                    <a href="bicarbonato.php" class="btn-card">COMPRAR</a>
                </div>

                <div class="card-produto">
                    <img class="img-padrao" src="./imagens/hidroxo_de_potassio.webp" alt="">
                    <h3>Hidróxido de Potássio 1kg</h3>
                    <p>R$ 42,90</p>
                    <a href="bicarbonato.php" class="btn-card">COMPRAR</a>
                </div>

                <div class="card-produto">
                    <img class="img-padrao" src="./imagens/alcool_etilico.webp" alt="">
                    <h3>Álcool Etílico 92,8% 1L</h3>
                    <p>R$ 12,90</p>
                    <a href="bicarbonato.php" class="btn-card">COMPRAR</a>
                </div>

                <div class="card-produto">
                    <img class="img-padrao" src="./imagens/base_detergente.webp" alt="">
                    <h3>Base para detergente 5L</h3>
                    <p>R$ 27,90</p>
                    <a href="bicarbonato.php" class="btn-card">COMPRAR</a>
                </div>
                <div class="card-produto">
                    <img class="img-padrao" src="./imagens/sabonete_liquido.webp" alt="">
                    <h3>Sabonete líquido 5L</h3>
                    <p>R$ 34,90</p>
                    <a href="bicarbonato.php" class="btn-card">COMPRAR</a>
                </div>

            </div>
    </section>


    <section class="area-contato" id="contato">
        <h1>Contato</h1>
        <div class="mae-contato">
            <div class="contato">

                <div class="card">
                    <h2>Preencha aqui para nos contatarmos:</h2>
                    <form action="">
                        <input type="text" placeholder="Nome completo">
                        <input type="email" placeholder="E-mail">
                        <input type="number" placeholder="Telefone" id="">
                        <div class="enviar-btns">
                            <input type="submit" placeholder="Enviar" class="submit-btn"
                                onclick="alert('Dados enviado com sucesso!')">
                            <button type="reset" class="submit-btn"
                                onclick="alert('Dados limpos com sucesso!')">Limpar</button>
                        </div>

                    </form>

                </div>

                <div>
                    <textarea placeholder="Envie sua mensagem">Envia Sua Mensagem</textarea><br>


                </div>
            </div>
        </div>

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