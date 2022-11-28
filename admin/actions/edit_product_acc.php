<?PHP
require_once "../../functions/autoload.php";

$postData = $_POST;
$id = $_GET['id'] ?? null;


try {

    $product = new Products();

    $product->editProduct(
    $id,
    $postData['name'],
    $postData['price'],
    $postData['available_date'],
    $postData['product_description'],
    $postData['image'],
    $postData['image_description'],
    $postData['product_measurements']);

    if (!empty($fileData['tmp_name'])) {
        if (!empty($postData['portada_og'])) {
            (new Imagen())->borrarImagen(__DIR__ . "/../../img/covers/" . $postData['portada_og']);
        }
        $imagen = (new Imagen())->subirImagen(__DIR__ . "/../../img/covers", $fileData);
        $comic->reemplazar_imagen($imagen, $id);
    }
    
    header('Location: ../index.php?a=product_crud');

} catch (\Exception $e) {
    echo "<pre>";
    print_r($e->getMessage());
    echo "<pre>";
    die("No se pudo crear el producto =(");
}