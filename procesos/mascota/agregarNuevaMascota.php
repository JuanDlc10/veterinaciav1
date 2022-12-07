<?php 
    include "../../clases/Mascotas.php";
    $Mascota = new Mascotas();

    $datos = array(
        "id_persona" => $_POST['id_persona'],
        "tipo" => $_POST['tipo'],
        "nombre" => $_POST['nombre'],
        "raza" => $_POST['raza'],
        "fecha_nacimiento" => $_POST['fecha'],
        "tamanio" => $_POST['tamanio'],
        "sexo" => $_POST['sexo'],
        "descripcion" => $_POST['descripcion']
    );

    $respuesta = $Mascota -> agregarMascota($datos);
    if ($respuesta) {
        ?>
        <script>
            window.location.href = 'http://127.0.0.1/veterinaria/vistas/mascota/mascota.php'; 
        </script>
    <?php
    } else {
        echo "No se puedo agregar";
    }

?>