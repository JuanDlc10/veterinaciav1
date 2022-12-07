<?php 
    include "Conexion.php";
    class Desparasitacion extends Conexion {
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
        public function opcionesMascotas() {
            $conexion = parent::conectar();
            $opciones = '';
            $sql = "SELECT id_mascota,
                CONCAT(nombre) as nombreMascota
            FROM t_mascota";
            $respuesta = mysqli_query($conexion, $sql);
            while ($ver = mysqli_fetch_array($respuesta)) {
                $opciones .= '<option value="'.$ver['id_mascota'].'">'.
                                strtoupper($ver['nombreMascota']) .
                            '</option>';
            }
            return $opciones;
        }
        public function agregarDesparasitacion($datos) {
            $conexion = parent::conectar();
            $sql = "INSERT INTO t_desparasitacion (id_mascota,
                                            id_usuario,
                                            fecha
                                            )
                                            VALUES
                                            (?,?,?)";
            $query = $conexion -> prepare($sql);
            $query -> bind_param('iis', $datos['id_mascota'],
                                            $datos['id_usuario'],
                                            $datos['fecha']);
            return $query -> execute();
        }
    }



?>