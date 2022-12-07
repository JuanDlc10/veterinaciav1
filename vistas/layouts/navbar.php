    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="../inicio/inicio.php  ">
        <img src="../..//public/img/logo.jpg" alt="Logo" height="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link" href="../inicio/inicio.php"><i class="fa-solid fa-star-of-david"></i> Inicio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../personas/personas.php"><i class="fa-solid fa-people-group"></i> Personas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../usuarios/usuarios.php"><i class="fa-solid fa-users"></i> Usuarios</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../mascota/mascota.php"><i class="fa-solid fa-paw"></i> Mascotas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../desparasitacion/desparasitacion.php"><i class="fa-solid fa-prescription-bottle"></i> Desparasitación</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../vacunas/vacunas.php"><i class="fa-solid fa-syringe"></i> Vacunas</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-envelope-circle-check"></i> <?php echo $_SESSION['usuario']; ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li>
                    <a class="dropdown-item" href="../../procesos/auth/logout.php">
                    Cerrar sesion
                    </a>
                </li>
            <li>
                <hr class="dropdown-divider">
            </li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>