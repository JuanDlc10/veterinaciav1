<?php
    $sql = "SELECT * FROM t_persona";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table table-hover table-bordered mt-4">
    <thead class="text-center">
        <tr>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php while($ver = mysqli_fetch_array($respuesta)):  ?>
        <tr>
            <td> <?php echo $ver['paterno']; ?> </td>
            <td> <?php echo $ver['materno']; ?> </td>
            <td> <?php echo $ver['nombre']; ?> </td>
            <td> <?php echo $ver['telefono']; ?> </td>
            <td> 
                <a href="#" class="btn btn-outline-warning">
                    Editar
                </a> 
            </td>
            <td>
                <a href="../../procesos/persona/eliminarPersona.php?id=<?php echo $ver['id_persona']?>" 
                    class="btn btn-outline-danger">
                    Eliminar
                </a>
            </td>
            
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>


