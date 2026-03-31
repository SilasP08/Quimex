<?php
include 'data.php';
// print "<pre>";
// print_r($produtos_gerais);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - <?php echo $nomeloja?></title>
    <link rel="stylesheet" href="./css/produtos.css">
</head>

<body>
   <?php 
    require 'partials/header.php';
    ?>

    <div class="Produtos">
        <h1>Produtos</h1>
        
            <div class="cat-produtos">
                
                <ul>
                    <?php
                        foreach($categorias as $kat =>$nome){
                            print '
                            <li><a href="#cat-'.$kat.'">'.$nome.'</a></li>
                            ';
                        };
                    ?>
                </ul>
            </div>

        <div class="linha">
            <?php
                foreach($produtos_gerais as $produto) {
                    print '
                        <div class="card-produto">
                            <img class="img-padrao" src="'.$produto['imagem'].'" alt="">
                            <h3>'.$produto['nome'].'</h3>
                            <p>R$ ' . $produto['preco'].'</p>
                            <a href="bicarbonato.php" class="btn-card">COMPRAR</a>
                        </div>
                    ';
                };
            ?>
        </div>    
           
    </div>

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