<?PHP
require_once "../../functions/autoload.php";

$postData = $_POST;

echo "<pre>";
print_r($postData);
echo "</pre>";

try {

    $color = new Colors();

    $idColor = $color->createColor(
        $postData['color']
    );


    header('Location: ../index.php?a=color_crud');
} catch (\Exception $e) {
    echo "<pre>";
    print_r($e->getMessage());
    echo "<pre>";
    die("No se pudo crear el color");
}