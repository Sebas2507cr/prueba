<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <title>Bienvenidos a las votaciones estudiantiles</title>
    <form method="post" autocomplete="off">
        <h2>Bienvenidos a las votaciones estudiantiles</h2>

        <div class="input-group">
            <div class="input-container">
                <input type="text" name="cedula" placeholder="cedula">
                <i class="fa-solid fa-user"></i>
            </div>

            <input type="submit" name="send" class="btn" value="Enviar">
        </div>

    </form>
    
    <?php
        include("send.php")
    ?>
</body>
</html>