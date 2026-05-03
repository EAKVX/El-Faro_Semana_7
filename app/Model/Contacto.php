<?php
class Contacto {
    public static function guardar($nombre, $email, $mensaje) {
        require_once __DIR__ . '/../../Config/Conexion.php';
        $conexion = new Conexion();
        $db = $conexion->getConexion();
        // Preparamos el INSERT INTO para insertar un nuevo contacto en la base de datos
        $stmt = $db->prepare("INSERT INTO contactos (nombre, email, mensaje) VALUES (?, ?, ?)");
        return $stmt->execute([$nombre, $email, $mensaje]);
    }
}
?>