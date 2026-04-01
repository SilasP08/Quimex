<?php
require_once 'init.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $ids = array_column($_SESSION['produtos'], 'id');
    $novoId = $ids ? max($ids) + 1 :  1 ;
    $_SESSION['produtos'][] = [
        'id'=> $novoId,
        'nome'=> $_POST['nome'],
        'preco'=> $_POST['preco'],
        'categoria'=> $_POST['categoria'],
        'imagem'=> $_POST['imagem']
    ];
    header('location: Produtos.php?produtoadd=1');
    exit;
};

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
    require_once 'partials/header.php';
    ?>

    <section>
        <div class="container">

            <div class="form-card">
                <h2>Cadastrar Novo Produto</h2>

                <form action="cadastro_produto.php" method="POST">
                    <div class="form-group">
                        <label>Nome do Produto</label>
                        <input type="text" placeholder="Digite o nome do produto" name="nome">
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label>Categoria</label>
                            <select name="categoria">
                                <option value="">Selecione</option value="">
                                <option value="Limpeza">Produtos de Limpeza</option>
                                <option value="Químicos">Produtos Químicos</option>
                                <option value="Risco">Produtos de Risco</option>
                                <option value="Beleza">Produtos de Beleza</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Preço (R$)</label>
                            <input type="number" step="0.01" min="0" placeholder="0.00" name="preco">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label>Quantidade em Estoque</label>
                            <input type="number" placeholder="0" name="quantidade">
                        </div>

                    </div>

                    <div class="form-group">
                        <label>Imagem do Produto</label>
                        <input type="text" placeholder="Coloque o caminho da imagem ou URL" name="imagem"  accept="image/*">
                    </div>

                    <div class="form-group">
                        <label>Descrição do Produto</label>
                        <textarea name="desc" placeholder="Digite uma descrição detalhada do produto..."></textarea>
                    </div>

                    <button class="btn" >Cadastrar Produto</button>
                </form>
            </div>

        </div>
    </section>


    <?php
        require_once 'partials/footer.php';
    ?>

</body>

</html>