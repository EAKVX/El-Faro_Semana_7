<?php
// Incluimos el modelo para poder usarlo en el controlador
require_once __DIR__ . '/../Model/Articulo.php';

class ArticuloController{
    
    public function procesarNuevoArticulo() {
        // Verificamos si el formulario fue enviado
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validamos y sanitizamos los datos recibidos
            $titulo = trim($_POST['titulo'] ?? '');
            // Para la descripción, permitimos etiquetas HTML básicas pero eliminamos scripts
            $descripcion = trim($_POST['descripcion'] ?? '');
            // Titulo y descripción no pueden estar vacíos
            if (!empty($titulo) && !empty($descripcion)) {
                // Obtenemos la fecha actual para la publicación
                $fechaPublicacion = date('Y-m-d H:i:s');
                // Instanciamos el modelo con los datos recibidos
                $articulo = new Articulo(null, $titulo, $descripcion, $fechaPublicacion);

                // Llamamos al método guardar del modelo
                if ($articulo->guardar()) {
                    echo "<div class='notification is-success has-text-centered mt-4 container'>¡Éxito! El artículo ha sido publicado en la página de inicio.</div>";
                } else {
                    echo "<div class='notification is-danger has-text-centered mt-4 container'>Error al guardar el artículo.</div>";
                }
            }
        }
    }
    // Método para cargar la página de inicio con los artículos
    public function listarInicio() {
        // Pedimos los datos al modelo
        $articulos = Articulo::obtenerTodos();
        
        // Retornamos el arreglo para que la vista lo pueda usar
        return $articulos;
    }

}