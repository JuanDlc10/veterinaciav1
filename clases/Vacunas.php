<?php 
    include "Conexion.php";
    class Vacunas extends Conexion {
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
        public function agregarVacuna($datos) {
            $conexion = parent::conectar();
            $sql = "INSERT INTO t_vacunas (id_mascota,
                                            id_usuario,
                                            nombre,
                                            fecha
                                            )
                                            VALUES
                                            (?,?,?,?)";
            $query = $conexion -> prepare($sql);
            $query -> bind_param('iiss', $datos['id_mascota'],
                                            $datos['id_usuario'],
                                            $datos['nombre'],
                                            $datos['fecha']);
            return $query -> execute();
        }
        public function eliminarVacuna($idVacuna){
            $conexion = parent::conectar();
            $sql = "DELETE FROM t_vacunas WHERE id_vacuna = ?";
            $query = $conexion -> prepare($sql);
            $query -> bind_param('i',$idVacuna);
            return $query -> execute();
        }
    }



?>