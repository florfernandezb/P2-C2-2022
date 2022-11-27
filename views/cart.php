<?PHP
$miCarrito = new Cart;

$items = $miCarrito->get_carrito();

?>
<h1 class="text-center fs-2 my-5"> Carrito de Compras</h1>
<div class="container my-4">

    <?PHP if (count($items)) { ?>
        <form action="actions/update_items_acc.php" method="POST">
            <table class="table">

                <thead>
                    <tr>
                        <th scope="col" width="15%">Producto</th>
                        <th scope="col" width="15%">Cantidad</th>
                        <th class="text-end" scope=" col" width="15%">Precio</th>
                        <th class="text-end" scope="col" width="10%"></th>
                    </tr>
                </thead>
                <tbody>
                    <?PHP foreach ($items as $key => $item) { ?>
                        <tr>
                            <td class="align-middle">
                                <h2 class="h5"><?= $item['product'] ?></h2>
                                <img src="<?= './res/products/'. $item['img'] . '.png';?>" alt="Imágen Illustrativa de <?= $item['product'] ?>" class="img-fluid rounded shadow-sm">
                                <p><?= $item['product'] ?></p>
                            </td>
                            <td class="align-middle">
                                <label for="q_<?= $key ?>" class="visually-hidden">Cantidad</label>
                                <input type="number" class="form-control" value="<?= $item['cantidad'] ?>" id="q_<?= $key ?>" name="q[<?= $key ?>]">
                            </td>
                            <td class="text-end align-middle">
                                <p class="h5 py-3">$<?= number_format($item['cantidad'] * $item['precio'], 2, ",", ".") ?></p>
                            </td>
                            <td class="text-end align-middle">
                                <a href="actions/remove_item_acc.php?id=<?= $key ?>" class="btn btn-sm btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?PHP } ?>

                    <tr>
                        <td colspan="4" class="text-end">
                            <h2 class="h5 py-3">Total:</h2>
                        </td>
                        <td class="text-end">
                            <p class="h5 py-3">$<?= number_format($miCarrito->precio_total(), 2, ",", ".") ?></p>
                        </td>
                        <td></td>
                    </tr>
                </tbody>



            </table>



            <div class="d-flex justify-content-end gap-2">
                <input type="submit" value="Actualizar Cantidades" class="btn btn-warning">
                <a href="index.php?s=productList" role="button" class=" btn btn-danger">Seguir comprando</a>
                <a href="actions/clear_cart_acc.php" role="button" class="btn btn-danger">Vaciar Carrito</a>
                <a href="#" role="button" class="btn btn-primary">Finalizar Compra</a>
            </div>

        </form>
    <?PHP } else { ?>
        <h2 class="text-center mb-5 text-danger">Su carrito esta vacio</h2>
    <?PHP } ?>

</div>