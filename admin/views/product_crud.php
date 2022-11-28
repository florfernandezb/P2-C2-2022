<?php
    $TABLE_COLUMNS = [
        'Id', 
        'Nombre', 
        'Precio', 
        'Disponibilidad', 
        'Descripcion', 
        'Imagen', 
        'Descripcion de la imagen', 
        'Medidas', 
        'Acciones'
    ];
    $products = new Products();
    $productList = $products->getProducts();
    
?>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion de <b>Productos</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="index.php?a=add_product" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Agregar nuevo producto</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
                        <?PHP foreach ($TABLE_COLUMNS as $name) { ?>
						<th><?= $name ?></th>
                        <?PHP } ?>
					</tr>
				</thead>
				<tbody>
                <?PHP foreach ($productList as $product) { ?>
                    <tr>                   
						<td><p>  <?=  $product->getProductId() ?> </p></td>
						<td> <?=  $product->getName() ?> </td>
						<td> <?=  $product->getPrice() ?> </td>
						<td> <?=  $product->getDate() ?> </td>
                        <td> <?=  $product->getProductDescription() ?> </td>
                        <td> <img src="<?=  '../res/products/'. $product->getImage() . '.png';?>" alt="Imagen Ilustrativa de <?= $product->getImageDescription() ?>" class="img-fluid rounded"> </td>
                        <td> <?=  $product->getImageDescription() ?> </td>
                        <td> <?=  $product->getMeasurements() ?> </td>
						<td>
							<a href="index.php?a=modify_product&id=<?= $product->getProductId() ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Edit"></i></a>
							<a href="index.php?a=delete_product&id=<?= $product->getProductId() ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
						</td>
					</tr>
                <?PHP } ?>
				</tbody>
			</table>
		</div>
	</div>        
</div>