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
        
            <div class="cat-produtos">
                
                <ul>
                    <li><a href="produtos.php">Todos</a></li>

                    <?php
                        foreach($categorias as $kat =>$nome){
                            print '
                            <li><a href="index.php?categoria='.$kat.'#Produtos">'.$nome.'</a></li>
                            ';
                        };
                    ?>
                </ul>
            </div>

        <div class="linha-produtos">
            <?php
                foreach($_SESSION['produtos'] as $produto) {
                    if($categoria_get === '' || $produto['categoria']===$categoria_get) {
                         print '
                        <div class="card-produto">
                            <img class="img-padrao" src="'.$produto['imagem'].'" alt="">
                            <h3>'.$produto['nome'].'</h3>
                            <p>R$ ' . $produto['preco'].'</p>
                            <a href="novo_produto.php?id='.$produto['id'].'" class="btn-card">COMPRAR</a>
                        </div>
                            ';
                        // print_r($produto);
                    }
                   
                        
                };
                   
            ?>
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