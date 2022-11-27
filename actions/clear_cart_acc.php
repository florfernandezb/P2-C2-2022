<?PHP
require_once "../functions/autoload.php";

(new Cart)->clear_items();
header('location: ../index.php?s=cart');