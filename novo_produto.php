<?php
require_once 'init.php';

$id = intval($_GET['id'] ?? 0);

$produtoEncontrado = null;

foreach($_SESSION['produtos'] as $produto) {
    if ($produto['id'] == $id) {
        $produtoEncontrado = $produto;
        break;
    }
}

if (!$produtoEncontrado) {
    echo "Produto não encontrado!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto - <?php echo $produto['nome'];  ?></title>
    <link rel="stylesheet" href="./css/bicarbonato.css">
</head>
<body>

    <?php 
    require_once 'partials/header.php';
    ?>

    <section class="section-pdr">
        <div class="produto-container">
            <div class="produto-imagem">
                <img src="<?php echo $produto['imagem']; ?>" alt="">
            </div>

            <div class="produto-info">

                <h2><?php echo $produto['nome']; ?></h2>

                <p class="descricao">
                    <?php echo $produto['desc']; ?>
                </p>

               <ul class="caracteristicas">
                    <li><?php echo $produto['categoria']; ?></li>
               </ul>
                
                <div class="preco">
                   <?php echo  'R$'.$produto['preco']. ''; ?> 
                </div>
                

                <p class="estoque">
                    <?php echo 'Quantidade em estoque '.$produto['qtd']. ''; ?>
                </p>
                <button class="btn-carrinho">Adicionar ao Carrinho</button>
                
            </div>
        </div>


    </section>

    <?php
        require_once 'partials/footer.php';
    ?>

</body>
</html>