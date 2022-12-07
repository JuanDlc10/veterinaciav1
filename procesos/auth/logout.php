<?php session_start();
    session_destroy();
    # header('location:../../index.php');
?>

    <script> /* Este script funciona para direccionar en casos de que falle header('location:')  */
        window.location.href = 'http://127.0.0.1/veterinaria/index.php'; 
    </script>