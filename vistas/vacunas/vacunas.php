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
            <h2>Vacunas de las mascotas</h2>
            <a href="./agregarVacuna.php" class="btn btn-outline-primary">
                Agregar Vacuna
            </a>
            <hr>
            <?php include "tablaVacunas.php"  ?>
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