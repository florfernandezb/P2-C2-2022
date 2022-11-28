<?php 
$PRODUCT_KEYS = [
    ['label' => 'Nombre', 'type' => 'text', 'id' => 'name'],
    ['label' => 'Precio', 'type' => 'number', 'id' => 'price'], 
    ['label' => 'Disponibilidad', 'type' => 'date', 'id' => 'available_date'], 
    ['label' => 'Descripción', 'type' => 'text', 'id' => 'product_description'], 
    ['label' => 'Imagen', 'type' => 'file', 'id' => 'image'], 
    ['label' => 'Descripción de la imagen', 'type' => 'text', 'id' => ''],
    ['label' => 'Medidas del producto', 'type' => 'text', 'id' => 'product_measurements'], 
];
?>
<form action="actions/add_product_acc.php" method="POST">
    <div class="modal-header">						
        <h4 class="modal-title">Agregá un producto:</h4>
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
        <input type="button" class="btn btnVaciar" data-dismiss="modal" value="Cancelar">
        <input type="submit" class="btn btnFinalizar" value="Guardar">
    </div>
</form>