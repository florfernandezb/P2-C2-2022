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

    if (!empty($postData['categories'])) {
        
        $product->edit_product_x_category($id, $postData['categories']);
    }
    
    header('Location: ../index.php?a=product_crud');

} catch (\Exception $e) {
    echo "<pre>";
    print_r($e->getMessage());
    echo "<pre>";
    die("No se pudo editar el producto ");
}