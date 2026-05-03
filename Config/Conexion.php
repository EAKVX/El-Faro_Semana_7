<?php

class Conexion {
    // Definimos las credenciales de XAMPP por defecto
    private $host = 'localhost';
    private $db_name = 'elfaro_db';
    private $username = 'root'; // Usuario por defecto en XAMPP
    private $password = '';     // Contraseña por defecto en XAMPP (vacía)
    public $conn;

    // Método principal para obtener la conexión
    public function getConexion() {
        $this->conn = null;

        try {
            // DSN (Data Source Name): Especifica el tipo de base de datos, host y nombre de BD
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8mb4";
            
            // Instanciamos el objeto PDO
            $this->conn = new PDO($dsn, $this->username, $this->password);
            
            // Configuramos PDO para que lance excepciones (errores) si algo falla
            //PDO=: Es la clase principal de PHP para acceder a bases de datos. Permite una conexión segura y flexible a diferentes tipos de bases de datos.
            //PDO::ATTR_ERRMODE: Establece el modo de error. PDO::ERRMODE_EXCEPTION: Lanza excepciones en caso de error.
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Configuramos el modo de obtención de datos por defecto a asociativo
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        } catch(PDOException $exception) {
            // Si hay un error, lo capturamos y detenemos la ejecución mostrando el mensaje
            echo "Error de conexión a la Base de Datos: " . $exception->getMessage();
            exit;
        }
        // Devolvemos la conexión establecida
        return $this->conn;
    }
}
?>