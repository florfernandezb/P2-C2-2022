<?php 
$categories = (new Categories)->getCategories();

$PRODUCT_KEYS = [
    ['label' => 'Nombre', 'type' => 'text', 'id' => 'name'],
    ['label' => 'Precio', 'type' => 'number', 'id' => 'price'], 
    ['label' => 'Disponibilidad', 'type' => 'date', 'id' => 'available_date'], 
    ['label' => 'Descripción', 'type' => 'text', 'id' => 'product_description'], 
    ['label' => 'Imagen', 'type' => 'file', 'id' => 'image'], 
    ['label' => 'Descripción de la imagen', 'type' => 'text', 'id' => 'image_description'],
    ['label' => 'Medidas del producto', 'type' => 'text', 'id' => 'product_measurements'], 
];
?>
<form action="actions/add_product_acc.php" method="POST">
    <div class="modal-header">						
        <h2 class="modal-title">Agregá un producto:</h2>
    </div>
    <div class="modal-body">	
        <?php foreach($PRODUCT_KEYS as $formData) { 
            ?>				
        <div class="form-group">
            <label><?= $formData['label'] ?></label>
            <input type=<?= $formData['type'] ?> class="form-control" id=<?= $formData['id'] ?> name=<?= $formData['id'] ?> required>
        </div>
        <?php } ?>
        <div class="form-group">
        <label>Categoría</label>
        <select class="form-select" name="category" id="category" required>
            <?php foreach($categories as $category) { ?>
            <option value=<?= $category->getId() ?>> <?= $category->getName() ?> </option>
            <?php } ?>
        </select>
        </div>
        
    </div>
    <div class="modal-footer">
        <a href="index.php?a=product_crud" type="button" class="btn btnVaciar" data-dismiss="modal" value="Cancelar">Cancelar</a>
        <input type="submit" class="btn btnFinalizar" value="Guardar">
    </div>
</form>