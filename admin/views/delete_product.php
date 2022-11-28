<?PHP
$productId = $_GET['id'] ?? FALSE;
$product = (new Products())->getProductById($productId);
?>
<div class="row my-5 g-3">
<h2 class="text-center mb-5 fw-bold">¿Está seguro que desea eliminar este producto?</h2>

	<div class="col-12 col-md-6">
		

			<h3>Id:</h3>
			<p><?= $product->getProductId() ?></p>

			<h3>Nombre del producto:</h3>
			<p><?= $product->getName() ?></p>
			<h3>Precio:</h3>
			<p><?= $product->getPrice() ?></p>

			<h3>Descripción:</h3>
			<p><?= $product->getProductDescription() ?></p>

			<a href="actions/delete_product_acc.php?id=<?= $product->getProductId() ?>" role="button" class="d-block btn btn-sm btnFinalizar mt-4">Eliminar</a>
	</div>

	

</div>