<?PHP
$miCarrito = new Cart;

$items = $miCarrito->get_carrito();

?>
<h1 class="text-center fs-2 my-5"> Carrito de Compras</h1>
<div class="container my-4">

    <?PHP if (count($items)) { ?>
        <form action="actions/update_product_acc.php" method="POST">
            <table class="table">

       
        <div class="col-auto table">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col" >Producto</th>
                        <th scope="col" >Cantidad</th>
                        <th class="text-end" scope="col" >Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?PHP foreach ($items as $key => $item) { ?>
                        <tr>
                            <td class="align-middle text-center cartProd">
                                <img src="<?= './res/products/'. $item['img'] . '.png';?>" alt="Imagen Ilustrativa de <?= $item['product'] ?>" class="img-fluid rounded">
                                <h2 class="h5"><?= $item['product'] ?></h2>
                            </td>
                            <td class="align-middle text-center cartCant">
                                    <div>
                                    <label for="q_<?= $key ?>" class="visually-hidden">Cantidad</label>
                                    <input type="number" class="form-control" value="<?= $item['cantidad'] ?>" id="q_<?= $key ?>" name="q[<?= $key ?>]">
                                    <input type="submit" value="Actualizar Cantidad" class="btn btnActCant">
                                </div>
                                </td>
                                <td class="text-end align-middle text-center cartPrice">
                                    <p class="h5 py-3">$<?= number_format($item['cantidad'] * $item['precio'], 2, ",", ".") ?></p>
                                </td>
                            </div>
                            <td class="text-end align-middle text-center divCartDel">
                            <a href="actions/remove_product_acc.php?id=<?= $key ?>" class="delete" data-toggle="modal"><i class="bi bi-trash-fill" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
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
            </div>
            </div>
            <div class="d-flex justify-content-end gap-2">
                
                <a href="index.php?s=productList" role="button" class=" btn btnSeguirComprando"><i class="bi bi-arrow-left biIcons"></i>Seguir comprando</a>
                <a href="actions/clear_cart_acc.php" role="button" class="btn btnVaciar"><i class="bi bi-trash-fill biIcons" data-toggle="tooltip" title="" data-original-title="Delete"></i>Vaciar Carrito</a>
                <a href="#" role="button" class="btn btnFinalizar">Finalizar Compra<i class="bi bi-arrow-right biIcons"></i></a>
            </div>

        </form>
    <?PHP } else { ?>
        <h2 class="text-center mb-5 text-danger">Su carrito esta vacio</h2>
    <?PHP } ?>

</div>