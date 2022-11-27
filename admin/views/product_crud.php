<?php
    $TABLE_COLUMNS = [
        'Id', 'Nombre', 'Precio', 'Disponibilidad', 'Descripcion', 'Imagen', 'Descripcion de la imagen', 'Medidas', 'Acciones'
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
						<a href="#addProduct" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Agregar nuevo producto</span></a>
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
                        <td> <?=  $product->getImage() ?> </td>
                        <td> <?=  $product->getImageDescription() ?> </td>
                        <td> <?=  $product->getMeasurements() ?> </td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Edit"></i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
						</td>
					</tr>
                <?PHP } ?>
				</tbody>
			</table>
		</div>
	</div>        
</div>