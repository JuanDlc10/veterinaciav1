<?php session_start();
    if(isset($_SESSION['usuario'])){
        include '../layouts/header.php'; 
        include '../layouts/navbar.php';
        include '../../clases/Mascotas.php';
        $Mascota = new Mascotas(); 
?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Agregar Mascota</h2>
                    <form action="../../procesos/mascota/agregarNuevaMascota.php" method="post">
                        <div class="row">
                            <div class="col">
                                <label for="id_persona">Nombre del dueño</label>
                                <select name="id_persona" id="id_persona" class="form-select">
                                <?php echo $Mascota -> opcionesPersonas(); ?>{
                                </select>
                            </div>
                            <div class="col">
                                <label for="tipo">Tipo</label>
                                <input type="text" id="tipo" name="tipo" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="nombre">Nombre de la Mascota</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="fecha">Fecha de nacimiento</label>
                                <input type="date" id="fecha" name="fecha" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="raza">Raza</label>
                                <input type="text" id="raza" name="raza" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="tamanio">Tamaño</label>
                                <input type="text" id="tamanio" name="tamanio" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="sexo">Sexo</label>
                                <input type="text" id="sexo" name="sexo" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="descripcion">Descripcion</label>
                                <input type="text" id="descripcion" name="descripcion" class="form-control" required>
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