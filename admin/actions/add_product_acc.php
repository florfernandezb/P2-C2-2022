<?PHP
require_once "../../functions/autoload.php";

$postData = $_POST;


try {

    $product = new Products();

    $idproduct = $product->createProduct(
        $postData['name'],
        $postData['price'],
        $postData['available_date'],
        $postData['product_description'],
        $postData['image'],
        $postData['image_description'],
        $postData['product_measurements']
    );

    if (isset($postData['category']) && $idproduct != null) {
        $product->add_product_x_category($idproduct, $postData['category']);
    }

    header('Location: ../index.php?a=product_crud');
} catch (\Exception $e) {
    echo "<pre>";
    print_r($e->getMessage());
    echo "<pre>";
    die("No se pudo crear el producto =(");
}