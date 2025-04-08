<?php
session_name("LOGIN");
session_start();

// Evitar caché del navegador
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Credenciales válidas (simuladas)
$usuario_valido = "admin";
$clave_valida = "1234";

// Validar entrada
if (isset($_POST['usuario'], $_POST['clave'])) {
    $usuario = trim($_POST['usuario']);
    $clave = trim($_POST['clave']);

    if ($usuario === $usuario_valido && $clave === $clave_valida) {
        $_SESSION['Nombre'] = $usuario;
        $_SESSION['login'] = true;
        header("Location: /prueba/id/index.php");
        exit();
    } else {
        $_SESSION['error'] = "Usuario o clave incorrecta";
        header("Location: /prueba/login/index.php");
        exit();
    }
} else {
    $_SESSION['error'] = "Por favor, complete todos los campos.";
    header("Location: /prueba/login/index.php");
    exit();
}
?>

