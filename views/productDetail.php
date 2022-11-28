<?php
$productId = (int) $_GET['id'];
$product = (new Products())->getProductById($productId);

$productImage = $product->getImage();

?>
<main class="container">
    <section class="product-details row">
        <picture class="img-prod col-6">
            <source srcset="<?= './res/products/'. $productImage . '.png';?>" media="(max-width:480px)">
            <img src="<?= './res/products/'. $productImage . '.png';?>" alt="<?= $product->getImageDescription();?>">
        </picture>
            
        <div class="prod-details col-6">
            <h2><?= $product->getName();?></h2>
            <p>Precio: $<?= $product->getPrice();?></p>
            <p>Descripcion: <?= $product->getProductDescription();?></p>    
            <p>Disponible a partir de: <?= $product->getDate();?></p>    
        </div>
        <form action="actions/add_to_cart.php" method="GET" class="row">
            <div class="col-6 d-flex align-items-center">
                <label for="q" class="fw-bold me-2">Cantidad: </label>
                <input type="number" class="form-control" value="1" name="q" id="q">
            </div>
            <div class="col-6">
                <input type="submit" value="COMPRAR" class="btn btnFinalizar w-100 fw-bold">
                <input type="hidden" value="<?= $productId ?>" name="id" id="id">
            </div>
        </form>
    </section>
    <div class="row">
        <a class="back col-12" href="index.php?s=productList">Volver a productos</a>
    </div>
</main>