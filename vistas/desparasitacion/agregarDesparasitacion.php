<?php session_start();
    if(isset($_SESSION['usuario'])){
        include '../layouts/header.php'; 
        include '../layouts/navbar.php';
        include '../../clases/Desparasitacion.php';
        $Desparasitacion = new Desparasitacion();  
?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Agregar desparasitación</h2>
                    <form action="../../procesos/desparasitacion/agregarNuevaDesparasitacion.php" method="post">
                        <div class="row">
                            <div class="col">
                                <label for="id_persona">Nombre del dueño</label>
                                <select name="id_persona" id="id_persona" class="form-select">
                                <?php echo $Desparasitacion -> opcionesPersonas(); ?>{
                                </select>
                            </div>
                            <div class="col">
                                <label for="id_mascota">Nombre de la mascota</label>
                                <select name="id_mascota" id="id_mascota" class="form-select">
                                <?php echo $Desparasitacion -> opcionesMascotas(); ?>{
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="fecha">Fecha de desparasitación</label>
                                <input type="date" id="fecha" name="fecha" class="form-control" required>
                            </div>
                        </div>
                        <div style="text-align:right ;">
                        <button class="btn btn-outline-primary mt-3">Guardar</button>
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