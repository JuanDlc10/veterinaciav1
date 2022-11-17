<?php session_start();
    include "../../clases/Usuario.php";
    $Usuario = new Usuario();

    $email = $_POST['email'];
    $password = sha1($_POST['password']); 

    $respuesta = $Usuario->logear($email,$password);
    if ($respuesta) {
        header('location:../../vistas/inicio.php');
    } else {
        echo 'No se pudo logear';
    }

?>