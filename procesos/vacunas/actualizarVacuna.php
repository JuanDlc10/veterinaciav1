<?php 
    include "../../clases/Vacunas.php";
    $Vacuna = new Vacunas();

    $datos = array(
        "nombre" => $_POST['nombre'],
        "fecha" => $_POST['fecha'],
        "id_vacuna" => $_POST['id_vacuna']
    );

    $respuesta = $Vacuna -> actualizarVacuna($datos);
    if ($respuesta) {
        ?>
        <script>
            window.location.href = 'http://127.0.0.1/veterinaria/vistas/vacunas/vacunas.php'; 
        </script>
    <?php
    } else {
        echo "No se pudo actualizar";
    }

?>