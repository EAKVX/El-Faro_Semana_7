<?php
require_once __DIR__ . '/../Model/Usuario.php';

class UsuarioController {
    
    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Recibimos los datos y los limpiamos (trim elimina espacios en blanco)
            $nombre = trim($_POST['nombre']);
            $email = trim($_POST['email']);
            $password = $_POST['password'];

            if (!empty($nombre) && !empty($email) && !empty($password)) {
                // Encriptamos la contraseña
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                try {
                    // Intentamos guardar en la BD
                    if (Usuario::guardar($nombre, $email, $passwordHash)) {
                        echo "<div class='notification is-success has-text-centered mt-4 container'>¡Éxito! El usuario <strong>$nombre</strong> ha sido registrado.</div>";
                    }
                } catch (PDOException $e) {
                    // Si el correo ya existe, la BD arrojará un error (por el UNIQUE del email)
                    echo "<div class='notification is-danger has-text-centered mt-4 container'>Error: El correo electrónico ya está registrado.</div>";
                }
            }
        }
    }

    // Nuevo método para enviar los usuarios a la vista
    public function listarUsuarios() {
        return Usuario::obtenerTodos();
    }
}
?>