<?php
require_once __DIR__ . '/../framework/jsonProductsReader.php';
$productId = (int) $_GET['id'];
$product = getProductId($productId);

$productCategory = $product->getCategory();
$productImage = $product->getImage();

?>
<main class="container">
    <section class="product-details row">
        <picture class="img-prod col-6">
            <source srcset="<?= './res/'. $productCategory .'/'. $productImage . '.png';?>" media="(max-width:480px)">
            <img src="<?= './res/'. $productCategory .'/'. $productImage . '.png';?>" alt="<?= $product->getImageDescription();?>">
        </picture>
            
        <div class="prod-details col-6">
            <h2><?= $product->getName();?></h2>
            <p>Precio: $<?= $product->getPrice();?></p>
            <p>Descripcion: <?= $product->getProductDescription();?></p>    
            <p>Disponible a partir de: <?= $product->getDate();?></p>    
        </div>
    </section>
    <div class="row">
        <a class="back col-12" href="index.php?s=productList">Volver a productos</a>
    </div>
</main>