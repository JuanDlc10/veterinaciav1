<?php 
    include "../../clases/Vacunas.php";

    $idVacuna = $_GET['id'];
    $Vacuna = new Vacunas();
    if ($Vacuna -> eliminarVacuna($idVacuna)) {
        ?>
        <script>
            window.location.href = 'http://127.0.0.1/veterinaria/vistas/vacunas/vacunas.php'; 
        </script>
    <?php
    } else {
        echo "No se pudo eliminar";
    }
?>