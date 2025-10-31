<?php
$host = 'localhost';
$dbname = 'Tienda_Claves';
$username = 'root';
$password = '';
$port = 3380;  

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    echo "✅ Conexión exitosa a la base de datos 'keyrush'";
    
} catch(PDOException $e) {
    die("❌ Error de conexión: " . $e->getMessage());
}
?>