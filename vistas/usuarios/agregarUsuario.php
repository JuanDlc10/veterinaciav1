<?php session_start();
    if(isset($_SESSION['usuario'])){
        include '../layouts/header.php'; 
        include '../layouts/navbar.php'; 
        include '../../clases/Usuario.php';
        $Usuario = new Usuario();
?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Agregar rol al usuario</h2>
                    <form action="../../procesos/usuarios/agregarNuevoUsuario.php" method="post">
                        <div class="row">
                            <div class="col">
                                <label for="id_cat_rol">Rol de usuario</label>
                                <select name="id_cat_rol" id="id_cat_rol" class="form-select">
                                    <?php echo $Usuario -> opcionesRoles(); ?>{}
                                </select>
                            </div>
                            <div class="col">
                                <label for="id_persona">Persona</label>
                                <select name="id_persona" id="id_persona" class="form-select">
                                <?php echo $Usuario -> opcionesPersonas(); ?>{
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required> 
                            </div>
                            <div class="col">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                        </div>
                        <div style="text-align:right ;">
                        <button class="btn btn-outline-primary mt-3">
                            Agregar
                        </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



<?php 
    include '../layouts/footer.php'; 

?>
    <script>
        $(document).ready(function(){
            $('#id_persona').select2();
        });
    </script>
<?php
    }else{
?>
        <script> /* Este script funciona para direccionar en casos de que falle header('location:')  */
            window.location.href = 'http://127.0.0.1/veterinaria/index.php'; 
        </script>
<?php
    }
?>