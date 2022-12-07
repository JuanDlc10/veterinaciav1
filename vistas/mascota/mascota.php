<?php session_start();
    if(isset($_SESSION['usuario'])){
        include '../../clases/Conexion.php';
        include '../layouts/header.php'; 
        include '../layouts/navbar.php'; 
        $con = new Conexion();
        $conexion = $con -> conectar();
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Mascotas de la veterinaria</h2>
            <a href="./agregarMascota.php" class="btn btn-outline-primary">
                Agregar Nuevo Usuario
            </a>
            <hr>
            <?php include "tablaMascota.php"  ?>
        </div>
    </div>
</div>
<?php include '../layouts/footer.php'; ?>

<?php
    }else{
?>
        <script> /* Este script funciona para direccionar en casos de que falle header('location:')  */
            window.location.href = 'http://127.0.0.1/veterinaria/index.php'; 
        </script>
<?php
    }
?>