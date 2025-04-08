<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style2.css">
    <style>
        .admin-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        .admin-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php
    session_name("LOGIN");
    session_start();

    // Guardar el valor del usuario para volver a mostrarlo si hay error
    $usuarioGuardado = isset($_SESSION['usuario_temp']) ? $_SESSION['usuario_temp'] : '';
    $mensajeError = isset($_SESSION['error']) ? $_SESSION['error'] : '';
    unset($_SESSION['usuario_temp'], $_SESSION['error']);

    // URL del enlace del botón Administrador
    $linkAdmin = "/prueba/admin/index.html"; // Cambia esta ruta por la que necesites
    ?>

    <!-- Botón Administrador -->
    <a href="<?php echo $linkAdmin; ?>" class="admin-button">Administrador</a>

    <div class="login-container">
        <form action="login.php" method="POST" autocomplete="off">
            <label>Usuario</label>
            <input type="text" name="usuario" value="<?php echo htmlspecialchars($usuarioGuardado); ?>" required>
            <br>
            <label>Clave</label>
            <input type="password" name="clave" required>
            <br><br>
            <button type="submit">Login</button>
        </form>

        <?php if (!empty($mensajeError)) : ?>
            <div class="error"><?php echo $mensajeError; ?></div>
        <?php endif; ?>
    </div>
</body>
</html>