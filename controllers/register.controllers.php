<?php
session_start();
require_once '../includes/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    
    // Validaciones básicas
    if (empty($email) || empty($password)) {
        header('Location: ../vistas/register.php?error=campos_vacios');
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ../vistas/register.php?error=email_invalido');
        exit;
    }
    
    // Validar contraseña (mismos requisitos del frontend)
    if (strlen($password) < 8 || 
        !preg_match('/[\d\W]/', $password) || 
        !preg_match('/[a-z]/', $password) || 
        !preg_match('/[A-Z]/', $password)) {
        header('Location: ../vistas/register.php?error=password_invalida');
        exit;
    }
    
    try {
        // Verificar si el email ya existe
        $stmt = $pdo->prepare("SELECT usuario_id FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        
        if ($stmt->fetch()) {
            header('Location: ../vistas/register.php?error=email_existente');
            exit;
        }
        
        // Generar username único a partir del email
        $username = explode('@', $email)[0];
        $baseUsername = $username;
        $counter = 1;
        
        // Verificar si el username ya existe y generar uno único
        while (true) {
            $stmt = $pdo->prepare("SELECT usuario_id FROM usuarios WHERE username = ?");
            $stmt->execute([$username]);
            
            if (!$stmt->fetch()) {
                break; // Username disponible
            }
            
            $username = $baseUsername . $counter;
            $counter++;
        }
        
        // Hash de la contraseña
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        
        // Insertar nuevo usuario
        $stmt = $pdo->prepare("INSERT INTO usuarios (username, email, contraseña, tipo_usuario) VALUES (?, ?, ?, 'comprador')");
        $stmt->execute([$username, $email, $passwordHash]);
        
        // Obtener el ID del usuario recién insertado
        $usuario_id = $pdo->lastInsertId();
        
        // Crear sesión automáticamente después del registro
        $_SESSION['user_id'] = $usuario_id;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['logged_in'] = true;
        
        // Mostrar mensaje de éxito y luego redirigir a index.html
        header('Location: ../vistas/register.php?success=registro_exitoso');
        exit;
        
    } catch (PDOException $e) {
        error_log("Error en registro: " . $e->getMessage());
        header('Location: ../vistas/register.php?error=bd_error');
        exit;
    }
} else {
    // Si no es POST, redirigir al formulario
    header('Location: ../vistas/register.php');
    exit;
}
?>