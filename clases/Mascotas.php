<?php 
    include "Conexion.php";
    class Mascotas extends Conexion {
        #Exteds sirve para declarar la herencia
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
        public function agregarMascota($datos) {
            $conexion = parent::conectar();
            $sql = "INSERT INTO t_mascota (id_persona,
                                            tipo,
                                            nombre,
                                            fecha_nacimiento,
                                            raza,
                                            tamanio,
                                            sexo,
                                            descripcion)
                                            VALUES
                                            (?,?,?,?,?,?,?,?)";
            $query = $conexion -> prepare($sql);
            $query -> bind_param('isssssss', $datos['id_persona'],
                                            $datos['tipo'],
                                            $datos['nombre'],
                                            $datos['fecha_nacimiento'],
                                            $datos['raza'],
                                            $datos['tamanio'],
                                            $datos['sexo'],
                                            $datos['descripcion']);
            return $query -> execute();
        }
        public function eliminarMascota($idMascota){
            $conexion = parent::conectar();
            $sql = "DELETE FROM t_mascota WHERE id_mascota = ?";
            $query = $conexion -> prepare($sql);
            $query -> bind_param('i',$idMascota);
            return $query -> execute();
        }
    }




?>