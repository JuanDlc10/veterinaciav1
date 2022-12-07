<?php
    $sql = "SELECT * FROM v_desparasitacion";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table table-hover table-bordered mt-4">
    <thead class="text-center">
        <tr>
            <th>Nombre del dueño</th>
            <th>Nombre de la mascota</th>
            <th>Fecha</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php while($ver = mysqli_fetch_array($respuesta)):  ?>
        <tr>
            <td> <?php echo $ver['nombrePersona']; ?> </td>
            <td> <?php echo $ver['nombreMascota']; ?> </td>
            <td> <?php echo $ver['fecha']; ?> </td>
            <td> 
                <a href="#" class="btn btn-outline-warning">
                    Editar
                </a> 
            </td>
            <td>
                <a href="#" class="btn btn-outline-danger">
                    Eliminar
                </a>
            </td>
            
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>