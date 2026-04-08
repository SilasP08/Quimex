<?php 
require_once 'init.php';


$categoria_get = isset($_GET['categoria']) ? trim($_GET['categoria']) : '';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>
        <?php echo $nomeloja; ?>
    </title>
</head>

<body>

    <?php 
    require_once 'partials/header.php';
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
                <a href="bicarbonato.html" class="btn-card">COMPRAR</a>
            </div>

            <div class="card-produto">
                <img class="img-padrao" src="./imagens/cloro.jpg" alt="">
                <h3>Hipoclorito de Sódio (Cloro) 5L</h3>
                <p>R$ 34,90</p>
                <a href="bicarbonato.html" class="btn-card">COMPRAR</a>
            </div>

            <div class="card-produto">
                <img class="img-padrao" src="./imagens/bicarbonato_de_sodio_.webp" alt="">
                <h3>Bicarbonato de Sódio 1kg</h3>
                <p>R$ 15,90</p>
                <a href="bicarbonato.html" class="btn-card">COMPRAR</a>
            </div>

            <div class="card-produto">
                <img class="img-padrao" src="./imagens/sodacaustica.webp" alt="">
                <h3>Soda Cáustica Escamas 99% 1kg</h3>
                <p>R$ 19,90</p>
                <a href="bicarbonato.html" class="btn-card">COMPRAR</a>
            </div>

            <div class="card-produto">
                <img class="img-padrao" src="./imagens/hidroxo_de_potassio.webp" alt="">
                <h3>Hidróxido de Potássio 1kg</h3>
                <p>R$ 42,90</p>
                <a href="bicarbonato.html" class="btn-card">COMPRAR</a>
            </div>

            <div class="card-produto">
                <img class="img-padrao" src="./imagens/alcool_etilico.webp" alt="">
                <h3>Álcool Etílico 92,8% 1L</h3>
                <p>R$ 12,90</p>
                <a href="bicarbonato.html" class="btn-card">COMPRAR</a>
            </div>

            <div class="card-produto">
                <img class="img-padrao" src="./imagens/poli.webp" alt="">
                <h3>Polimetilenoureia N28 Allchem 50 Litros</h3>
                <p>R$ 756.75</p>
                <a href="bicarbonato.html" class="btn-card">COMPRAR</a>
            </div>

            <div class="card-produto">
                <img class="img-padrao" src="./imagens/vonixx.webp" alt="">
                <h3>IMPACT 5L Vonixx</h3>
                <p>R$ 67.80</p>
                <a href="bicarbonato.html" class="btn-card">COMPRAR</a>
            </div>

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

    <?php
        require_once 'partials/footer.php';
    ?>
</body>

</html>