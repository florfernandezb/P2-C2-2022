<?php
    $TABLE_COLUMNS = [
        'Id', 
        'Nombre', 
        'Precio', 
        'Disponibilidad', 
        'Descripción', 
        'Imagen', 
        'Descripción de la imagen', 
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
						<h2>Gestión de <b>Productos</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="index.php?a=add_product" class="btn btnFinalizar" data-toggle="modal"><i class="bi bi-plus-circle-fill biIconsLight"></i> <span>Agregar nuevo producto</span></a>
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
                        <td> <picture>
                        <!-- <source srcset="<?= '../../res/products/'. $productImage . '-mobile.png';?>" media="(max-width:480px)"> -->
                        <img src="../../res/products/<?= $product -> getImage() . '.png';?>" alt="<?= $product->getImageDescription();?>">
                    </picture>
                        <td> <?=  $product->getImageDescription() ?> </td>
                        <td> <?=  $product->getMeasurements() ?> </td>
						<td>
							<a href="index.php?a=modify_product" class="edit" data-toggle="modal"><i class="bi bi-pen-fill biIcons"></i></a>
							<a href="index.php?a=modify_product" class="delete" data-toggle="modal"><i class="bi bi-trash-fill" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
						</td>
					</tr>
                <?PHP } ?>
				</tbody>
			</table>
		</div>
	</div>        
</div>