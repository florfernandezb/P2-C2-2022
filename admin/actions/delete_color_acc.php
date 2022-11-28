<?PHP
require_once "../../functions/autoload.php";

$id = $_GET['id'] ?? FALSE;
$color = (new Colors())->getColorById($id);

$postData = $_POST;

echo "<pre>";
print_r($postData);
echo "</pre>";

try {
    $color = new Colors();
    $product = new Products();

    $productsList = $product->getProductsByColor($id);
    
    foreach ($productsList as $prod) {
        $product->delete_product_x_color($prod->getProductId());
    }

    $color->deleteColor($id);

    header('Location: ../index.php?a=category_crud');
} catch (\Exception $e) {
    echo "<pre>";
    print_r($e->getMessage());
    echo "<pre>";
    die("No se pudo eliminar la categoría");
}