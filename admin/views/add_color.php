<?php 
$COLOR_KEYS = [
    ['label' => 'Color', 'type' => 'text', 'id' => 'name']
];
?>
<form action="actions/add_color_acc.php" method="POST">
    <div class="modal-header">						
        <h2 class="modal-title">Agregá un color:</h2>
    </div>
    <div class="modal-body">	
        <?php foreach($COLOR_KEYS as $formData) { 
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