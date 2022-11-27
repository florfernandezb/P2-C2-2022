<?PHP
require_once "../functions/autoload.php";

$id = $_GET['id'] ?? null;
$q = $_GET['q'] ?? 1;

if($id != null){
    (new Cart)->add_item((int)$id, (int)$q);
    header('location: ../index.php?s=productList');
} else {
    echo"else";
}
