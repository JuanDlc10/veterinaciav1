<?php 
    include "../../clases/Usuario.php";
    $Usuario = new Usuario();

    $datos = array ( 
        "id_cat_rol" => $_POST['id_cat_rol'],
        "email" => $_POST['email'],
        "password" => sha1($_POST['password']),
        "id_usuario" => $_POST['id_usuario']
    );

    $respuesta = $Usuario -> actualizarUsuario($datos);
    if ($respuesta) {
        ?>
        <script>
            window.location.href = 'http://127.0.0.1/veterinaria/vistas/usuarios/usuarios.php'; 
        </script>
    <?php
    } else {
        echo "No se pudo actualizar";
    }

?>