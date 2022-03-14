<?php

require '../includes/config/database.php';
$db = connect_db(); // connect to db
$query = "SELECT * FROM propiedades"; //define query
$queryResult = mysqli_query($db, $query);

$result = $_GET["result"] ?? null; //if result does not exit, asign null

require '../includes/functions.php';
include_template("header");
?>

<main class="contenedor seccion">
    <h1>Administrador Bienes Raices</h1>
    <?php if ($result == 1) : ?>
        <p class="alerta exito">Información almacenada Correctamente</p>
    <?php endif; ?>
    <a href="/admin/propierties/create.php" class="boton-verde">Nueva Propiedad</a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php while ($row = mysqli_fetch_assoc($queryResult)) : ?> <!-- Show results -->
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["titulo"]; ?></td>
                    <td> <img src="/build/imgPropierties/<?php echo $row["imagen"]; ?>" alt="imagen_propiedad"> </td>
                    <td>$<?php echo $row["precio"]; ?></td>
                    <td>
                        <a class="boton-verde-block" href="#">Eliminar</a>
                        <a class="boton-amarillo-block" href="#">Actualizar</a>
                    </td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>

</main>

<?php
    mysqli_close($db);
    include_template("footer"); 
?>