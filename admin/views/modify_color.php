<?php 
$id = $_GET['id'] ?? null;

$color = (new Colors)->getColorById($id);

$COLOR_KEYS = [
    ['label' => 'Nombre', 'type' => 'text', 'id' => 'name', 'value' => $color->getColor()]
];
?>
<form action="actions/edit_color_acc.php?id=<?= $color->getId() ?>" method="POST">
    <div class="modal-header">						
        <h4 class="modal-title">Editá tu producto!</h4>
    </div>
    <div class="modal-body">	
        <?php foreach($COLOR_KEYS as $formData) { 
            ?>				
        <div class="form-group">
            <label><?= $formData['label'] ?></label>
            <input value="<?= $formData['value'] ?>" type=<?= $formData['type'] ?> class="form-control" id=<?= $formData['id'] ?> name=<?= $formData['id'] ?> >
        </div>
        <?php } ?>
    </div>
    <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
        <input type="submit" class="btn btn-info" value="Save">
    </div>
</form>