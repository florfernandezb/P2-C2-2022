<?php
require_once __DIR__ . '/../framework/jsonProductsReader.php';
$productId = (int) $_GET['id'];
$product = getProductId($productId);

$productCategory = $product->getCategory();
$productImage = $product->getImage();
?>
<main>
    <section class="product-details">
        <picture class="img-prod">
            <source srcset="<?= './res/'. $productCategory .'/'. $productImage . '.png';?>" media="(max-width:480px)">
            <img src="<?= './res/'. $productCategory .'/'. $productImage . '.png';?>" alt="<?= $product->getImageDescription();?>">
        </picture>
            
        <div class="prod-details">
            <h2><?= $product->getName();?></h2>
            <p>Precio: $<?= $product->getPrice();?></p>
            <p>Descripcion: <?= $product->getProductDescription();?></p>    
        </div>
    </section>
</main>