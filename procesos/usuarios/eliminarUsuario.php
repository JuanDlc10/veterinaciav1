<?php 
    include "../../clases/Usuario.php";

    $idUsuario = $_GET['id'];
    $Usuario = new Usuario();
    if ($Usuario -> eliminarUsuario($idUsuario)) {
        ?>
        <script>
            window.location.href = 'http://127.0.0.1/veterinaria/vistas/usuarios/usuarios.php'; 
        </script>
    <?php
    } else {
        echo "No se pudo eliminar";
    }
?>