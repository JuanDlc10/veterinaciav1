<?php session_start();
    if(isset($_SESSION['usuario'])){
        
        include '../layouts/header.php'; 
        include '../layouts/navbar.php'; 
        
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Veterinaria</h2>
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