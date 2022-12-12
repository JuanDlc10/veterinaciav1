<?php 
    include "../../clases/Persona.php";

    $idPersona = $_GET['id'];
    $Persona = new Persona();
    if ($Persona -> eliminarPersona($idPersona)) {
        ?>
        <script>
            window.location.href = 'http://127.0.0.1/veterinaria/vistas/personas/personas.php'; 
        </script>
    <?php
    } else {
        echo "No se pudo eliminar";
    }


?>