<?php 
    include "../../clases/Persona.php";
    $Persona = new Persona();

    $datos = array(
        "paterno" => $_POST['paterno'],
        "materno" => $_POST['materno'],
        "nombre" => $_POST['nombre'],
        "telefono" => $_POST['telefono'],
        "id_persona" => $_POST['id_persona']
    );

    $respuesta = $Persona -> actualizarPersona($datos);
    if ($respuesta) {
        ?>
        <script>
            window.location.href = 'http://127.0.0.1/veterinaria/vistas/personas/personas.php'; 
        </script>
    <?php
    } else {
        echo "No se pudo actualizar";
    }

?>