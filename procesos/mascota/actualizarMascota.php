<?php 
    include "../../clases/Mascotas.php";
    $Mascota = new Mascotas();

    $datos = array(
        "id_persona" => $_POST['id_persona'],
        "tipo" => $_POST['tipo'],
        "nombre" => $_POST['nombre'],
        "fecha" => $_POST['fecha'],
        "raza" => $_POST['raza'],
        "tamanio" => $_POST['tamanio'],
        "sexo" => $_POST['sexo'],
        "descripcion" => $_POST['descripcion'],
        "id_mascota" => $_POST['id_mascota']
    );

    $respuesta = $Mascota -> actualizarMascota($datos);
    if ($respuesta) {
        ?>
        <script>
            window.location.href = 'http://127.0.0.1/veterinaria/vistas/mascota/mascota.php'; 
        </script>
    <?php
    } else {
        echo "No se pudo actualizar";
    }

?>