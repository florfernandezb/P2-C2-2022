<?PHP
// require_once "../functions/autoload.php";

$secciones_validas = [
    "dashboard" => [
        "titulo" => "Panel de administración"
    ]
];

$seccion = $_GET['a'] ?? "dashboard";


if (!array_key_exists($seccion, $secciones_validas)) {
    $view = "404";
    $titulo = "404 - Página no encontrada";
    echo "adentro if";
} else {
    $view = $seccion;
    echo $seccion;
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="res/favicon.png" type="image/x-icon">
</head>

<body>
<header class="row">
        <div class="col-6">
            <h1 ><a href="../index.php?s=home">Hecho por Vicki</a></h1>
        </div>
        
        <nav id="nav" class="col-6 navbar">
            <ul id="open-close">
                <li class="open"><a href="#nav">Abrir</a></li>
                <li class="close"><a href="#">Cerrar</a></li>
            </ul>    
            <ul id="menu" class="navbar">
                <li ><a  href="index.php?a=dashboard" class="nav-link active" aria-current="page">Home</a></li>
                <li class="dropdownmenu">       
                <a  href="index.php?s=add_product" class="nav-link active" aria-current="page">ADD PROD</a>
                </li>
                <li ><a  href="index.php?s=formContacto">NADA</a></li>
                <li ><a  href="actions/auth_logout.php">LOGOUT</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">

        <?PHP
        require file_exists("views/$view.php") ? "views/$view.php" : "views/404.php";
        echo $view;
        ?>

    </main>
    <footer class="bg-info text-light text-center">
        Jorge Perez 2022
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>