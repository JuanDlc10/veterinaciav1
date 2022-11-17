<?php 
    class Conexion{

        public $servidor = 'localhost';
        public $usuario = 'juan';
        public $password = '12345';
        public $bd = 'Veterinaria';
        public $puerto = '3306';
        public function conectar(){
            return mysqli_connect(
                $this->servidor,
                $this->usuario,
                $this->password,
                $this->bd,
                $this->puerto,
            );
        }
    }



?>