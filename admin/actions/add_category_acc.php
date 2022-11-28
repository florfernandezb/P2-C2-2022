<?PHP
require_once "../../functions/autoload.php";

$postData = $_POST;

echo "<pre>";
print_r($postData);
echo "</pre>";

try {

    $category = new Categories();

    $idCategory = $category->createCategory(
        $postData['name']
    );


    header('Location: ../index.php?a=category_crud');
} catch (\Exception $e) {
    echo "<pre>";
    print_r($e->getMessage());
    echo "<pre>";
    die("No se pudo crear la categoría");
}