<?php 
    include "Conexion.php";

    class Auth extends Conexion{
        public function logear($email, $password){
            $conexion = parent::conectar();
            $sql = "SELECT * FROM t_usuario 
                    WHERE email = '$email'
                    AND password = '$password'";
            $respuesta = mysqli_query($conexion, $sql);
            if (mysqli_num_rows($respuesta) > 0 ) {
                $_SESSION['idUsuario'] = $this -> crearSesionId($email,$password);
                $_SESSION['usuario'] = $email;
                return 1;
            } else {
                return 0;
            }
        }
        public function crearSesionId($email,$password){
            $conexion = parent::conectar();
            $sql = "SELECT id_usuario FROM t_usuario 
                    WHERE
                    email = '$email'
                    AND
                    password = '$password'";
            $respuesta = mysqli_query($conexion,$sql);
            return mysqli_fetch_array($respuesta)['id_usuario'];
        }
    }


?>