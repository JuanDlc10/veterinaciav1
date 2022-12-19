<?php session_start();
    if(isset($_SESSION['usuario'])){
        include '../layouts/header.php'; 
        include '../layouts/navbar.php';
        include '../../clases/Mascotas.php';
        $idMascota = $_GET['id'];
        $Mascota = new Mascotas(); 
        $data = $Mascota->editarMascota($idMascota);
?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Editar Mascota</h2>
                    <form action="../../procesos/mascota/actualizarMascota.php" method="post">
                    <input type="text" name="id_mascota" value="<?php echo $data['id']; ?>" hidden>
                        <div class="row">
                            <div class="col">
                                <label for="id_persona">Nombre del dueño</label>
                                <select name="id_persona" id="id_persona" class="form-select">
                                <?php echo $Mascota -> opcionesPersonas(); ?>{
                                </select>
                            </div>
                            <div class="col">
                                <label for="tipo">Tipo</label>
                                <input type="text" id="tipo" name="tipo" class="form-control" value="<?php echo $data['tipo']; ?>"
                                required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="nombre">Nombre de la Mascota</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $data['nombre']; ?>"
                                required>
                            </div>
                            <div class="col">
                                <label for="fecha">Fecha de nacimiento</label>
                                <input type="date" id="fecha" name="fecha" class="form-control" value="<?php echo $data['fecha_nacimiento']; ?>"
                                required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="raza">Raza</label>
                                <input type="text" id="raza" name="raza" class="form-control" value="<?php echo $data['raza']; ?>"
                                required>
                            </div>
                            <div class="col">
                                <label for="tamanio">Tamaño</label>
                                <input type="text" id="tamanio" name="tamanio" class="form-control" value="<?php echo $data['tamanio']; ?>"
                                required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="sexo">Sexo</label>
                                <select name="sexo" id="sexo" class="form-select" required>
                                    <option value="<?php echo $data['sexo']; ?>"><?php echo $data['sexo']; ?></option>
                                    <option value="Macho">Macho</option>
                                    <option value="Hembra">Hembra</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="descripcion">Descripcion</label>
                                <input type="text" id="descripcion" name="descripcion" class="form-control" value="<?php echo $data['descripcion']; ?>"
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