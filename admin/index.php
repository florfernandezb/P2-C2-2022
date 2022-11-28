<?PHP
require_once "../functions/autoload.php";

$secciones_validas = [
    "dashboard" => [
        "titulo" => "Panel de administración"
    ],
    "product_crud" => [
        "titulo" => "Gestión de productos"
    ],
    "category_crud" => [
        "titulo" => "Gestión de categorías"
    ],
    "color_crud" => [
        "titulo" => "Gestión de colores"
    ],
    "add_product" => [
        "titulo" => "Agregá un producto"
    ],
    "modify_product" => [
        "titulo" => "Editá un producto"
    ],
    "add_category" => [
        "titulo" => "Agregá una categoría"
    ],
    "modify_category" => [
        "titulo" => "Editá una categoría"
    ],
    "add_color" => [
        "titulo" => "Agregá un color"
    ],
    "modify_color" => [
        "titulo" => "Editá un color"
    ],
    "delete_category" => [
        "titulo" => "Elimina una categoría"
    ],
    "delete_product" => [
        "titulo" => "Elimina un producto"
    ]
];

$seccion = $_GET['a'] ?? "dashboard";


if (!array_key_exists($seccion, $secciones_validas)) {
    $view = "404";
    $titulo = "404 - Página no encontrada";
} else {
    $view = $seccion;
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $routes[$view]['title'];?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="res/favicon.png" type="image/x-icon">
</head>

<body>
<header class="row">
        <div class="col-6">
            <h1 ><a href="../index.php?a=dashboard">Hecho por Vicki</a></h1>
        </div>
        
        <nav id="nav" class="col-6 navbar">
            <ul id="open-close">
                <li class="open"><a href="#nav">Abrir</a></li>
                <li class="close"><a href="#">Cerrar</a></li>
            </ul>    
            <ul id="menu" class="navbar">
                <li ><a  href="index.php?a=dashboard" class="nav-link active" aria-current="page">Home</a></li>
                <li class="dropdownmenu">       
                <a  href="index.php?a=product_crud" class="nav-link active" aria-current="page">Productos</a>
                </li>
                <li ><a  href="index.php?a=category_crud">Categorías</a></li>
                <li ><a  href="index.php?a=color_crud">Colores</a></li>
                <li ><a  href="actions/auth_logout.php">LOGOUT</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">

        <?PHP
        require file_exists("views/$view.php") ? "views/$view.php" : "views/404.php";
        ?>

    </main>
    <footer>
        <p>Este sitio es un trabajo práctico para la materia Programación II del tercer cuatrimestre de la Escuela Da Vinci. </p>
        <p>Florencia Fernández Bugna | Manuela Jaureguialzo</p>
        <p>&copy; Da Vinci - 2022</p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>