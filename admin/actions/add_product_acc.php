<?PHP
require_once "../../functions/autoload.php";

$postData = $_POST;

echo "<pre>";
print_r($postData);
echo "</pre>";

try {

    $comic = new Products();

    $idComic = $comic->insert(
        $postData['titulo'],
        $postData['personaje_principal_id'],
        $postData['serie_id'],
        $postData['guionista_id'],
        $postData['artista_id'],
        $postData['volumen'],
        $postData['numero'],
        $postData['publicacion'],
        $postData['origen'],
        $postData['editorial'],
        $postData['bajada'],
        $imagen,
        $postData['precio']
    );

    if (isset($postData['personajes_secundarios'])) {
        foreach ($postData['personajes_secundarios'] as $personaje_id) {
            $comic->add_personajes_sec($idComic, $personaje_id);
        }
    }


    header('Location: ../index.php?sec=admin_comics');
} catch (\Exception $e) {
    echo "<pre>";
    print_r($e->getMessage());
    echo "<pre>";
    die("No se pudo cargar el personaje =(");
}