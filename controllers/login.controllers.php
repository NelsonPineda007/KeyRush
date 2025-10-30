<?php
session_start();
require_once '../includes/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    
    // Validaciones básicas
    if (empty($email) || empty($password)) {
        header('Location: ../vistas/login.php?error=credenciales_invalidas');
        exit;
    }
    
    try {
        // Buscar usuario por email
        $stmt = $pdo->prepare("SELECT usuario_id, username, email, contraseña FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        
        if ($user && password_verify($password, $user['contraseña'])) {
            // Login exitoso - crear sesión
            $_SESSION['user_id'] = $user['usuario_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['logged_in'] = true;
            
            // Mostrar mensaje de éxito y redirigir después
            header('Location: ../vistas/login.php?success=login_exitoso');
            exit;
        } else {
            // Credenciales incorrectas
            header('Location: ../vistas/login.php?error=credenciales_invalidas');
            exit;
        }
        
    } catch (PDOException $e) {
        error_log("Error en login: " . $e->getMessage());
        header('Location: ../vistas/login.php?error=credenciales_invalidas');
        exit;
    }
} else {
    // Si no es POST, redirigir al formulario
    header('Location: ../vistas/login.php');
    exit;
}
?>