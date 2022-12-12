<?php 
    include "../../clases/Mascotas.php";

    $idMascota = $_GET['id'];
    $Mascota = new Mascotas();
    if ($Mascota -> eliminarMascota($idMascota)) {
        ?>
        <script>
            window.location.href = 'http://127.0.0.1/veterinaria/vistas/mascota/mascota.php'; 
        </script>
    <?php
    } else {
        echo "No se pudo eliminar";
    }


?>