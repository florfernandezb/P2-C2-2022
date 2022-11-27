<?PHP
require_once "../functions/autoload.php";

$id = $_GET['id'] ?? null;

if($id != null){
    (new Cart())->remove_item($id);
    header('location: ../index.php?s=cart');
}
