<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');  
define('DB_NAME', 'biblio_t1');

function conectar() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die('Error de conexión: ' . $conn->connect_error);
    }
    return $conn;
}
?>
