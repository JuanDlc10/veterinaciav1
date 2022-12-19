<?php 
    include "Conexion.php";
    class Usuario extends Conexion {
        #Exteds sirve para declarar la herencia
        public function opcionesRoles() {
            $conexion = parent::conectar();
            $opciones = '';
            $sql = "SELECT * FROM t_cat_rol ORDER BY nombre";
            $respuesta = mysqli_query($conexion, $sql);
            while ($ver = mysqli_fetch_array($respuesta)) {
                $opciones .= '<option value="'.$ver['id_cat_rol'].'">'.
                                strtoupper($ver['nombre']).
                            '</option>';
            }
            return $opciones;
        }
        public function opcionesPersonas() {
            $conexion = parent::conectar();
            $opciones = '';
            $sql = "SELECT id_persona,
                CONCAT(paterno, ' ' ,materno, ' ', nombre) as nombrePersona
            FROM t_persona ORDER BY paterno";
            $respuesta = mysqli_query($conexion, $sql);
            while ($ver = mysqli_fetch_array($respuesta)) {
                $opciones .= '<option value="'.$ver['id_persona'].'">'.
                                strtoupper($ver['nombrePersona']) .
                            '</option>';
            }
            return $opciones;
        }
        public function agregarUsuario($datos) {
            $conexion = parent::conectar();
            $sql = "INSERT INTO t_usuario (id_cat_rol,
                                            id_persona,
                                            email,
                                            password
                                            )
                                            VALUES
                                            (?,?,?,?)";
            $query = $conexion -> prepare($sql);
            $query -> bind_param('iiss',    $datos['id_cat_rol'],
                                            $datos['id_persona'],
                                            $datos['email'],
                                            $datos['password']);
            return $query -> execute();
        }
        public function eliminarUsuario($idUsuario){
            $conexion = parent::conectar();
            $sql = "DELETE FROM t_usuario WHERE id_usuario = ?";
            $query = $conexion -> prepare($sql);
            $query -> bind_param('i',$idUsuario);
            return $query -> execute();
        }
        public function editarUsuario($idUsuario) {
            $conexion = parent::conectar();
            $sql = "SELECT * FROM t_usuario WHERE id_usuario = '$idUsuario'";
            $respuesta = mysqli_query($conexion,$sql);
            $persona = mysqli_fetch_array($respuesta);

            $data = array ( 
                "id_cat_rol" => $persona['id_cat_rol'],
                "email" => $persona['email'],
                "password" => $persona['password'],
                "id" => $persona['id_usuario']
            );
            return $data;
        }
        public function actualizarUsuario($datos) {
            $conexion = parent::conectar();
            $sql = "UPDATE t_usuario SET 
                                        id_cat_rol = ?,
                                        email = ?,
                                        password = ?
                                        WHERE id_usuario = ?";
            $query = $conexion -> prepare($sql);
            $query -> bind_param('issi', $datos['id_cat_rol'],
                                            $datos['email'],
                                            $datos['password'],
                                            $datos['id_usuario']);
            return $query -> execute();
        }
    }
?>