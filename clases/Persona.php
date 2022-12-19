<?php 
    include "Conexion.php";
    class Persona extends Conexion {
        #Exteds sirve para declarar la herencia
        public function agregarPersona($datos) {
            $conexion = parent::conectar();
            $sql = "INSERT INTO t_persona (paterno,
                                            materno,
                                            nombre,
                                            telefono)
                                            VALUES
                                            (?,?,?,?)";
            $query = $conexion -> prepare($sql);
            $query -> bind_param('ssss', $datos['paterno'],
                                            $datos['materno'],
                                            $datos['nombre'],
                                            $datos['telefono']);
            return $query -> execute();
        }
        public function eliminarPersona($idPersona){
            $conexion = parent::conectar();
            $sql = "DELETE FROM t_persona WHERE id_persona = ?";
            $query = $conexion -> prepare($sql);
            $query -> bind_param('i',$idPersona);
            return $query -> execute();
        }
        public function editarPersona($idPersona) {
            $conexion = parent::conectar();
            $sql = "SELECT * FROM t_persona WHERE id_persona = '$idPersona'";
            $respuesta = mysqli_query($conexion,$sql);
            $persona = mysqli_fetch_array($respuesta);

            $data = array ( 
                "paterno" => $persona['paterno'],
                "materno" => $persona['materno'],
                "nombre" => $persona['nombre'],
                "telefono" => $persona['telefono'],
                "id" => $persona['id_persona']
            );
            return $data;
        }
        public function actualizarPersona($datos) {
            $conexion = parent::conectar();
            $sql = "UPDATE t_persona SET 
                                        paterno = ?,
                                        materno = ?,
                                        nombre = ?,
                                        telefono = ?
                                        WHERE id_persona = ?";
            $query = $conexion -> prepare($sql);
            $query -> bind_param('ssssi', $datos['paterno'],
                                            $datos['materno'],
                                            $datos['nombre'],
                                            $datos['telefono'],
                                            $datos['id_persona']);
            return $query -> execute();
        }
    }



?>