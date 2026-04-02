<?php
require_once 'init.php';
// print "<pre>";
// print_r($_SESSION['produtos']);
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
        require_once 'partials/header.php';
        if (isset($_GET['produtoadd']) && $_GET['produtoadd'] === '1') {
            print '<p class="aviso"> Produto Adicionado com Sucesso!! </p>';
        };
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
                foreach($_SESSION['produtos'] as $produto) {
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

    <?php
        require_once 'partials/footer.php';
    ?>
</body>

</html>