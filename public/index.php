<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once '../public/vistas/header.php';
    require_once '../libreria/autocargador.php';
    require_once '../libreria/enrutador.php';
    require_once '../public/vistas/footer.php';
    // Crear una instancia del enrutador
    $router = new \Libreria\Enrutador();

    // Incluir las rutas
    require_once '../rutas/rutasweb.php';

    // Despachar la solicitud
    $router->obtenerRuta();

?>
