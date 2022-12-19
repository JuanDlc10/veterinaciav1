<?php 
    include "../../clases/Desparasitacion.php";
    $Desparasitacion = new Desparasitacion();

    $datos = array(
        "fecha_desparasitacion" => $_POST['fecha'],
        "id_desparasitacion" => $_POST['id_desparasitacion']
    );

    $respuesta = $Desparasitacion -> actualizarDesparasitacion($datos);
    if ($respuesta) {
        ?>
        <script>
            window.location.href = 'http://127.0.0.1/veterinaria/vistas/desparasitacion/desparasitacion.php'; 
        </script>
    <?php
    } else {
        echo "No se pudo actualizar";
    }

?>