<?PHP
require_once "../../functions/autoload.php";

$postData = $_POST;

echo "<pre>";
print_r($postData);
echo "</pre>";

try {

    $category = new Categories();

    $idCategory = $category->insert(
        $postData['nombre']
    );

    if (isset($postData['personajes_secundarios'])) {
        foreach ($postData['personajes_secundarios'] as $personaje_id) {
            $comic->add_personajes_sec($idComic, $personaje_id);
        }
    }


    // header('Location: ../index.php?sec=admin_comics');
} catch (\Exception $e) {
    echo "<pre>";
    print_r($e->getMessage());
    echo "<pre>";
    die("No se pudo cargar el personaje =(");
}