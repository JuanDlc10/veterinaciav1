<?php 
    include "../../clases/Desparasitacion.php";

    $idDesparasitacion = $_GET['id'];
    $Desparasitacion = new Desparasitacion();
    if ($Desparasitacion -> eliminarDesparasitacion($idDesparasitacion)) {
        ?>
        <script>
            window.location.href = 'http://127.0.0.1/veterinaria/vistas/desparasitacion/desparasitacion.php'; 
        </script>
    <?php
    } else {
        echo "No se pudo eliminar";
    }


?>