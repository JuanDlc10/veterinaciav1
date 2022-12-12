<?php
    $sql = "SELECT * FROM v_usuarios";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table table-hover table-bordered mt-4">
    <thead class="text-center">
        <tr>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php while($ver = mysqli_fetch_array($respuesta)):  ?>
        <tr>
            <td> <?php echo $ver['paterno']; ?> </td>
            <td> <?php echo $ver['materno']; ?> </td>
            <td> <?php echo $ver['nombrePersona']; ?> </td>
            <td> <?php echo $ver['nombreUsuario']; ?> </td>
            <td> <?php echo $ver['nombreRol']; ?> </td>
            <td> 
                <a href="#" class="btn btn-outline-warning">
                    Editar
                </a> 
            </td>
            <td>
            <a href="../../procesos/usuarios/eliminarUsuario.php?id=<?php echo $ver['idUsuario']?>" 
                    class="btn btn-outline-danger">
                    Eliminar
                </a>
            </td>
            
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>