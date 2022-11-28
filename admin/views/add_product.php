<?php 
$PRODUCT_KEYS = [
    ['label' => 'Nombre', 'type' => 'text', 'id' => 'name'],
    ['label' => 'Precio', 'type' => 'number', 'id' => 'price'], 
    ['label' => 'Disponibilidad', 'type' => 'date', 'id' => 'available_date'], 
    ['label' => 'Descripcion', 'type' => 'text', 'id' => 'product_description'], 
    ['label' => 'Imagen', 'type' => 'text', 'id' => 'image'], 
    ['label' => 'Descripcion de la imagen', 'type' => 'text', 'id' => ''],
    ['label' => 'Medidas del producto', 'type' => 'text', 'id' => 'product_measurements'], 
];
?>
<form action="actions/add_product_acc.php" method="POST">
    <div class="modal-header">						
        <h4 class="modal-title">Agregá un producto!</h4>
    </div>
    <div class="modal-body">	
        <?php foreach($PRODUCT_KEYS as $formData) { 
            ?>				
        <div class="form-group">
            <label><?= $formData['label'] ?></label>
            <input type=<?= $formData['type'] ?> class="form-control" id=<?= $formData['id'] ?> name=<?= $formData['id'] ?> required>
        </div>
        <?php } ?>
    </div>
    <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
        <input type="submit" class="btn btn-info" value="Save">
    </div>
</form>