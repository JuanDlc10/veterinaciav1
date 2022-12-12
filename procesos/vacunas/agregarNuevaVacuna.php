<?php session_start();
    include "../../clases/Vacunas.php";
    $Vacunas = new Vacunas();

    $datos = array(
        "id_mascota" => $_POST['id_mascota'],
        "id_usuario" => $_SESSION['idUsuario'],
        "nombre" => $_POST['nombre'],
        "fecha" => $_POST['fecha']
    );

    $respuesta = $Vacunas -> agregarVacuna($datos);
    if ($respuesta) {
        ?>
        <script>
            window.location.href = 'http://127.0.0.1/veterinaria/vistas/vacunas/vacunas.php'; 
        </script>
    <?php
    } else {
        echo "No se puedo agregar";
    }

?>