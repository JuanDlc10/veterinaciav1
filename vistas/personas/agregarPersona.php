<?php session_start();
    if(isset($_SESSION['usuario'])){
        include '../layouts/header.php'; 
        include '../layouts/navbar.php'; 
?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Agregar usuario</h2>
                    <form action="../../procesos/persona/agregarNuevaPersona.php" method="post">
                        <label for="paterno">Apellido paterno</label>
                        <input type="text" id="paterno" name="paterno" class="form-control" required>
                        <label for="materno">Apellido materno</label>
                        <input type="text" id="materno" name="materno" class="form-control" required>
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                        <label for="telefono">Telefono</label>
                        <input type="text" id="telefono" name="telefono" class="form-control" required>
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