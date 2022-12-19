<?php session_start();
    if(isset($_SESSION['usuario'])){
        include '../layouts/header.php'; 
        include '../layouts/navbar.php';
        include '../../clases/Desparasitacion.php';
        $idDesparasitacion = $_GET['id'];
        $Desparasitacion = new Desparasitacion();
        $data = $Desparasitacion->editarDesparasitacion($idDesparasitacion);  
?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <?php 
                    #print_r($_SESSION); #Sirve para mostrar las todas las sesiones activas
                    ?>
                    <h2>Editar desparasitación</h2>
                    <form action="../../procesos/desparasitacion/actualizarDesparasitacion.php" method="post">
                    <input type="text" name="id_desparasitacion" value="<?php echo $data['id']; ?>" hidden>
                        <div class="row">
                            
                            <div class="col">
                                    <label for="fecha">Fecha de desparasitación</label>
                                    <input type="date" id="fecha" name="fecha" class="form-control" value="<?php echo $data['fecha']; ?>"
                                    required>
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