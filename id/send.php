<?php
include("conexion.php");

if(isset($_POST['send'])){

    if(
        strlen($_POST['cedula']) >=1
    ){
        $cedula = trim($_POST['cedula']);
        $fecha = date("d/m/y");

        $consulta = "INSERT INTO datos(cedula,fecha) Values('$cedula','$fecha' )";
        $resultado = mysqli_query($conex, $consulta);

        if($resultado){
            header("Location: /prueba/votaciones/votacion.php");
            exit(); 
        }else {
            ?>
            <h3 class = "error">Ocurrio un error</h3>
            <?php
        }
    }
}
?>