<?PHP
require_once "../../functions/autoload.php";

$productId = $_GET['id'] ?? FALSE;
$product = (new Products())->getProductById($productId);

$postData = $_POST;

echo "<pre>";
print_r($postData);
echo "</pre>";

try {
    $product = new Products();

    $product->deleteProduct($productId);
   


    header('Location: ../index.php?a=product_crud');
} catch (\Exception $e) {
    echo "<pre>";
    print_r($e->getMessage());
    echo "<pre>";
    die("No se pudo eliminar el producto");
}