<?php

require '../includes/config/database.php';
// loading data base to show the registered propierties
$db = connect_db(); // connect to db
$query = "SELECT * FROM propiedades"; //define query
$queryResult = mysqli_query($db, $query); // do query

$result = $_GET["result"] ?? null; //if result does not exit (), asign null

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = filter_var($_POST["id"], FILTER_VALIDATE_INT);

    if ($id) {
        $query = "SELECT imagen FROM  propiedades WHERE id=${id}";
        $result = mysqli_query($db, $query);
        $imgToDelete = mysqli_fetch_assoc($result)["imagen"];
        $dirImages = "../build/imgPropierties/";
        unlink($dirImages . $imgToDelete); // Deleting image from server

        $query = "DELETE FROM propiedades where id=${id}";
        $result = mysqli_query($db, $query); // Delete register from database

        if ($result)
            header("Location:/admin?result=3");
    }
}

require '../includes/functions.php';
include_template("header");
?>

<main class="contenedor seccion">
    <h1>Administrador Bienes Raices test</h1>
    <?php if ($result == 1) : ?>
        <p class="alerta exito">Anuncio almacenado Correctamente</p>
    <?php elseif ($result == 2) : ?>
        <p class="alerta exito">Anuncio actualizado Correctamente</p>
    <?php elseif ($result == 3) : ?>
        <p class="alerta exito">Registro eliminado exitosamente</p>
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
            <?php while ($row = mysqli_fetch_assoc($queryResult)) : ?>
                <!-- Show results -->
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["titulo"]; ?></td>
                    <td> <img class="imagen-tabla" src="/build/imgPropierties/<?php echo $row["imagen"]; ?>" alt="imagen_propiedad"> </td>
                    <td>$<?php echo $row["precio"]; ?></td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a class="boton-amarillo-block" href="/admin/propierties/update.php?id=<?php echo $row["id"] ?> ">Actualizar</a>
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