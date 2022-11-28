<?PHP
$id = $_GET['id'] ?? FALSE;
$color = (new Colors())->getId($id);
?>
<div class="row my-5 g-3">
<h2 class="text-center mb-5 fw-bold">¿Está seguro que desea eliminar este color?</h2>

	<div class="col-12 col-md-6">
		

			<h3>Id:</h3>
			<p><?= $color->getId() ?></p>

			<h3>Nombre del color:</h3>
			<p><?= $color->getName() ?></p>
			

			<a href="actions/delete_color_acc.php?id=<?= $color->getId() ?>" role="button" class="d-block btn btn-sm btnFinalizar mt-4">Eliminar</a>
	</div>

	

</div>