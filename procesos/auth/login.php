<?php session_start();
    include "../../clases/Auth.php";
    $Usuario = new Auth();

    $email = $_POST['email'];
    $password = sha1($_POST['password']); 

    $respuesta = $Usuario->logear($email,$password);
    if ($respuesta) {
        header('location:../../vistas/inicio/inicio.php');
    } else {
        echo 'No se pudo logear';
    }

?>