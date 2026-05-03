<?php

require_once __DIR__ . '/../app/Controller/UsuarioController.php';

// Cargamos el Header (siempre visible)
require_once __DIR__ . '/../app/View/Layout/header.php';

// --- SISTEMA DE ENRUTAMIENTO BÁSICO ---
$action = $_GET['action'] ?? 'inicio';
// Enrutamos según la acción solicitada
switch ($action) {
    case 'registrar':
        $usuarioController = new UsuarioController();
        $usuarioController->registrar();
        require_once '../app/View/registro.php';
        break;
        
    case 'nuevo_articulo':
        // Instanciamos el controlador
        require_once '../app/Controller/ArticuloController.php';
        $articuloController = new ArticuloController();
        
        // Procesamos el formulario si hay un POST
        $articuloController->procesarNuevoArticulo();
        
        // Cargamos la vista del formulario
        require_once '../app/View/nuevo_articulo.php';
        break;

    case 'contacto':
        require_once '../app/Controller/ContactoController.php';
        $contactoController = new ContactoController();
        $contactoController->procesar();
        require_once '../app/View/contacto.php';
        break;

    case 'usuarios':
        require_once '../app/Controller/UsuarioController.php';
        $usuarioController = new UsuarioController();
        $usuarios = $usuarioController->listarUsuarios();
        require_once '../app/View/lista_usuario.php';
        break;
        
    default:
        // 1. Instanciamos el controlador de artículos
        require_once '../app/Controller/ArticuloController.php';
        $articuloController = new ArticuloController();
        
        // 2. Obtenemos los artículos de la BD y los guardamos en una variable
        $articulos = $articuloController->listarInicio();
        
        // 3. Cargamos la vista (ahora la vista tendrá acceso a la variable $articulos)
        require_once '../app/View/inicio.php';
        break;
}

// Cargamos el Footer (siempre visible)
require_once '../app/View/Layout/footer.php';
?>
