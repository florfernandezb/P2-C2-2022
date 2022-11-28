<?PHP
require_once "../../functions/autoload.php";

$postData = $_POST;
$id = $_GET['id'] ?? null;

try {

    $category = new Categories();

    echo "<pre>";
    print_r($postData['name']);
    echo "</pre>";

    echo "<pre>";
    print_r($id);
    echo "</pre>";

    $category->editCategory(
        $id,
        $postData['name']
    );
    
    header('Location: ../index.php?a=category_crud');

} catch (\Exception $e) {
    echo "<pre>";
    print_r($e->getMessage());
    echo "<pre>";
    die("No se pudo editar el producto ");
}