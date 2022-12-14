<?php

$products = new Products();
$productList = $products->getProducts();

if (isset($_GET['category'])) {
    $productsFilteredByCategories = $products->getProductsByCategory($_GET['category']);

    $productList = $productsFilteredByCategories;
}

?>
<main>
    <section id="product-list">
        <h2>Conocé nuestros productos</h2>
        <div class="row ">
            <?php
                foreach($productList as $product):
                $productImage = $product->getImage();
                ?>
            
            <article class=" col-xxl-4 col-md-6 col-xs-6">
                <div class="product-card">
                    <picture>
                        <source srcset="<?= './res/products/'. $productImage . '-mobile.png';?>" media="(max-width:480px)">
                        <img src="<?= './res/products/'. $productImage . '.png';?>" alt="<?= $product->getImageDescription();?>">
                    </picture>
                    <div class="card-content">
                        <h3><?= $product->getName();?></h3>
                        <p>$<?= $product->getPrice();?></p>
                        <p>Medidas: <?= $product->getMeasurements();?></p>
                    </div>
                    
                    <a href="index.php?s=productDetail&id=<?= $product->getProductId();?>" class="see-more">Ver más</a>
                </div>
            </article>
            <?php
            endforeach; ?>
        </div>
    </section>
</main>
