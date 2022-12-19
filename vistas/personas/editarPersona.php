<?php session_start();
    if(isset($_SESSION['usuario'])){
        include '../layouts/header.php'; 
        include '../layouts/navbar.php';
        include '../../clases/Persona.php';
        $idPersona = $_GET['id'];
        $Persona = new Persona();
        $data = $Persona->editarPersona($idPersona);
?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Editar Cliente</h2>
                    <form action="../../procesos/persona/actualizarPersona.php" method="post">
                        <input type="text" name="id_persona" value="<?php echo $data['id']; ?>" hidden>
                        <label for="paterno">Apellido paterno</label>
                        <input type="text" id="paterno" name="paterno" class="form-control" value="<?php echo $data['paterno']; ?>"
                        required>
                        <label for="materno">Apellido materno</label>
                        <input type="text" id="materno" name="materno" class="form-control" value="<?php echo $data['materno']; ?>"
                        required>
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $data['nombre']; ?>"
                        required>
                        <label for="telefono">Telefono</label>
                        <input type="text" id="telefono" name="telefono" class="form-control" value="<?php echo $data['telefono']; ?>"
                        required>
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