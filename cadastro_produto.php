<?php
include 'data.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos - <?php echo $nomeloja?></title>

    <link rel="stylesheet" href="./css/cadastro_produtos.css">
</head>

<body>

    <?php 
    require 'partials/header.php';
    ?>

    <section>
        <div class="container">

            <div class="form-card">
                <h2>Cadastrar Novo Produto</h2>

                <form>
                    <div class="form-group">
                        <label>Nome do Produto</label>
                        <input type="text" placeholder="Digite o nome do produto">
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label>Categoria</label>
                            <select>
                                <option>Selecione</option>
                                <option>Produtos Gerais</option>
                                <option>Produtos de Limpeza</option>
                                <option>Produtos Químicos</option>
                                <option>Produtos de Risco</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Preço (R$)</label>
                            <input type="number" placeholder="0.00">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label>Quantidade em Estoque</label>
                            <input type="number" placeholder="0">
                        </div>

                        <div class="form-group">
                            <label>Código do Produto</label>
                            <input type="text" placeholder="Ex: QMX-001">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Imagem do Produto</label>
                        <input type="file">
                    </div>

                    <div class="form-group">
                        <label>Descrição do Produto</label>
                        <textarea placeholder="Digite uma descrição detalhada do produto..."></textarea>
                    </div>

                    <button class="btn">Cadastrar Produto</button>
                </form>
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