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
    }
?>