<?PHP
require_once "../functions/autoload.php";

$postData = $_POST;

if(!empty($postData)){
    (new Cart())->update_quantities($postData['q']);
    header('location: ../index.php?s=cart');
}
