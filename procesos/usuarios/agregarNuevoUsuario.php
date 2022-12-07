<?php 
    include "../../clases/Usuario.php";
    $Usuario = new Usuario();

    $datos = array(
        "id_cat_rol" => $_POST['id_cat_rol'],
        "id_persona" => $_POST['id_persona'],
        "email" => $_POST['email'],
        "password" => sha1($_POST['password'])
    );

    $respuesta = $Usuario -> agregarUsuario($datos);
    if ($respuesta) {
        ?>
        <script>
            window.location.href = 'http://127.0.0.1/veterinaria/vistas/usuarios/usuarios.php'; 
        </script>
    <?php
    } else {
        echo "No se puedo agregar";
    }

?>