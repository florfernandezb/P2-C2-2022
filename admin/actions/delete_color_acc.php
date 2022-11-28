<?PHP
require_once "../../functions/autoload.php";

$id = $_GET['id'] ?? FALSE;
$color = (new Colors())->get_by_id($id);

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

    echo "<pre>";
    print_r($productsList);
    echo "</pre>";

    $color->deleteColor($id);

    header('Location: ../index.php?a=color_crud');
} catch (\Exception $e) {
    echo "<pre>";
    print_r($e->getMessage());
    echo "<pre>";
    die("No se pudo eliminar el color");
}