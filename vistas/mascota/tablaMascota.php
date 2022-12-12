<?php
    $sql = "SELECT * FROM v_mascota";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table table-hover table-bordered mt-4">
    <thead class="text-center">
        <tr>
            <th>Nombre del dueño</th>
            <th>Tipo de mascota</th>
            <th>Nombre la mascota</th>
            <th>Fecha de nacimiento</th>
            <th>Raza</th>
            <th>Tamaño</th>
            <th>Sexo</th>
            <th>Descripción</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php while($ver = mysqli_fetch_array($respuesta)):  ?>
        <tr>
            <td> <?php echo $ver['nombrePersona']; ?> </td>
            <td> <?php echo $ver['tipo']; ?> </td>
            <td> <?php echo $ver['nombreMascota']; ?> </td>
            <td> <?php echo $ver['fechaNac']; ?> </td>
            <td> <?php echo $ver['raza']; ?> </td>
            <td> <?php echo $ver['tamanio']; ?> </td>
            <td> <?php echo $ver['sexo']; ?> </td>
            <td> <?php echo $ver['descripcion']; ?> </td>
            <td> 
                <a href="#" class="btn btn-outline-warning">
                    Editar
                </a> 
            </td>
            <td>
            <a href="../../procesos/mascota/eliminarMascota.php?id=<?php echo $ver['idMascota']?>" 
                    class="btn btn-outline-danger">
                    Eliminar
                </a>
            </td>
            
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>