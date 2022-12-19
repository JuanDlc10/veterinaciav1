<?php session_start();
    if(isset($_SESSION['usuario'])){
        include '../layouts/header.php'; 
        include '../layouts/navbar.php';
        include '../../clases/Vacunas.php';
        $idVacuna = $_GET['id'];
        $Vacunas = new Vacunas(); 
        $data = $Vacunas->editarVacuna($idVacuna);
?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Agregar desparasitación</h2>
                    <form action="../../procesos/vacunas/actualizarVacuna.php" method="post">
                    <input type="text" name="id_vacuna" value="<?php echo $data['id']; ?>" hidden>
                        <div class="row">
                            <div class="col">
                                <label for="nombre">Nombre de la vacuna</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $data['nombre']; ?>"
                                required>
                            </div>
                            <div class="col">
                                <label for="fecha">Fecha de la vacuna</label>
                                <input type="date" id="fecha" name="fecha" class="form-control" value="<?php echo $data['fecha']; ?>"
                                required>
                            </div>
                        </div>
                        <div style="text-align:right ;">
                        <button class="btn btn-outline-primary mt-3">Actualizar</button>
                        </div>
                    </form>
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