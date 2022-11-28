<?PHP
require_once "../../functions/autoload.php";

$id = $_GET['id'] ?? FALSE;
$category = (new Categories())->get_by_id($id);

$postData = $_POST;

echo "<pre>";
print_r($postData);
echo "</pre>";

try {
    $category = new Categories();
    $product = new Products();

    $productsList = $product->getProductsByCategory($id);
    
    foreach ($productsList as $prod) {
        $product->delete_product_x_category($prod->getProductId());
    }

    echo "<pre>";
    print_r($productsList);
    echo "</pre>";

    $category->deleteCategory($id);

    header('Location: ../index.php?a=category_crud');
} catch (\Exception $e) {
    echo "<pre>";
    print_r($e->getMessage());
    echo "<pre>";
    die("No se pudo eliminar la categoría");
}