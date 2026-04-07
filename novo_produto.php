<?php
require_once 'init.php';

// $id = isset($_GET['$id']) ? (int)$_GET['id'] : 0;
// $ids = array_column($_SESSION['produtos'], 'id');
// $index = array_search($id, $ids);
// $produto = $_SESSION['produtos'][$index];
// print_r($produto); 
// if ($idex !== false) {
// $produto = $_SESSION['produto'][$index];
// } else {
//      echo 'Produto não existe!!!';
// }

$id = intval($_GET['id'] ?? 0);

// print_r(intval($_GET['id']) ?? 0);

$produtoEncontrado = null;

foreach($_SESSION['produtos'] as $produto) {
    if ($produto['id'] == $id) {
        $produtoEncontrado = $produto;
        break;
    }
}

if (!$produtoEncontrado) {
    header('Location: 404.php');
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