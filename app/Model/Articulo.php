<?php

class Articulo {
    private $id;
    private $titulo;
    private $descripcion;
    private $fechaPublicacion;

    public function __construct($id, $titulo, $descripcion, $fechaPublicacion) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->fechaPublicacion = $fechaPublicacion;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getFechaPublicacion() {
        return $this->fechaPublicacion;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setFechaPublicacion($fechaPublicacion) {
        $this->fechaPublicacion = $fechaPublicacion;
    }

   
    public function guardar() {
        // Requerimos nuestra clase de conexión real
        require_once __DIR__ . '/../../Config/Conexion.php';
        // Creamos una instancia de la conexión y obtenemos el objeto PDO
        $conexion = new Conexion();
        // Obtenemos la conexión PDO
        $db = $conexion->getConexion();
        
        // Preparamos el INSERT INTO para insertar un nuevo artículo en la base de datos
        $stmt = $db->prepare("INSERT INTO articulos (titulo, descripcion, fecha_publicacion) VALUES (?, ?, ?)");
        
        // Ejecutamos pasando los atributos del objeto actual ($this)
        return $stmt->execute([$this->titulo, $this->descripcion, $this->fechaPublicacion]);
    }

    // Método para obtener todos los artículos de la base de datos
    public static function obtenerTodos() {
        // Requerimos la conexión que creamos en el paso anterior
        require_once __DIR__ . '/../../Config/Conexion.php';
        
        $conexion = new Conexion();
        $db = $conexion->getConexion();
        
        // Preparamos la consulta SQL ordenando por los más recientes primero
        $stmt = $db->prepare("SELECT * FROM articulos ORDER BY fecha_publicacion DESC");
        $stmt->execute();
        
        // Retornamos los resultados como un arreglo asociativo
        return $stmt->fetchAll();
    }

}