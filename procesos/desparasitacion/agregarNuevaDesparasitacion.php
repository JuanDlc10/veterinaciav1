<?php session_start();
    include "../../clases/Desparasitacion.php";
    $Desparasitacion = new Desparasitacion();

    $datos = array(
        "id_mascota" => $_POST['id_mascota'],
        "id_usuario" => $_SESSION['idUsuario'],
        "fecha" => $_POST['fecha'],
    );

    $respuesta = $Desparasitacion -> agregarDesparasitacion($datos);
    if ($respuesta) {
        ?>
        <script>
            window.location.href = 'http://127.0.0.1/veterinaria/vistas/desparasitacion/desparasitacion.php'; 
        </script>
    <?php
    } else {
        echo "No se puedo agregar";
    }

?>