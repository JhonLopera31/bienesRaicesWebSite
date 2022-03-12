<?php
require '../../includes/config/database.php';
require '../../includes/functions.php';

$db = connect_db(); // data base connection

//get data from mysql
$query = "SELECT * FROM vendedores";
$result = mysqli_query($db, $query); // this way can present security issues, so it's neccessary to sanitize the data

$errores = []; //errors messages array
$titulo = $precio = $descripcion = $habitaciones = $wc = $estacionamientos = $vendedorId = "";

//Execute code after submit the form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //data sanitization for mysqli
    $titulo = mysqli_real_escape_string($db, $_POST["titulo"]);
    $precio = mysqli_real_escape_string($db, $_POST["precio"]);
    $descripcion = mysqli_real_escape_string($db, $_POST["descripcion"]);
    $habitaciones = mysqli_real_escape_string($db, $_POST["habitaciones"]);
    $wc = mysqli_real_escape_string($db, $_POST["wc"]);
    $estacionamientos = mysqli_real_escape_string($db, $_POST["estacionamientos"]);
    $creado = date('Y/m/d');
    $vendedorId = mysqli_real_escape_string($db, $_POST["vendedor"]);

    if (!isset($titulo) || trim($titulo) == '') {
        $errores[] = "Debes Añadir un titulo";
    }
    if (!isset($precio) || is_numeric($precio) == '') {
        $errores[] = "Debes ingresar un precio)";
    }
    if (!isset($descripcion) || sizeof(explode(" ", $descripcion)) < 20) {
        $errores[] = "La descripcion debe tener almenos 40 Caracteres";
    }
    if (!isset($habitaciones) || trim($habitaciones) == '') {
        $errores[] = "El número de habitaciones es obligatorio";
    }
    if (!isset($wc) || trim($wc) == '') {
        $errores[] = "El número de baños es obligatorio";
    }
    if (!isset($estacionamientos) || trim($estacionamientos) == '') {
        $errores[] = "El número de habitaciones es obligatorio";
    }
    if (!isset($vendedorId) || trim($vendedorId) == '') {
        $errores[] = "Elige un vendedor";
    }

    // Insert into database
    if (empty($errores)) {
        $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamientos, creado, vendedorId) 
        VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamientos', '$creado', '$vendedorId')";
        $result = mysqli_query($db, $query);

        if ($result) {
            header("Location: /admin"); //Reroute user
        }
    }
}
include_template("header"); // loading web site header
?>

<main class="contenedor seccion">
    <h1>Agragar elementos a la base de datos</h1>

    <!-- List error in site -->
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error"> <?php echo $error; ?> </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" action="/admin/propierties/create.php">
        <fieldset>
            <legend>Información General</legend>
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo $titulo ?>" placeholder="Título de la propiedad">

            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" value="<?php echo $precio ?>" placeholder="Precio. Ej: 120000000">

            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Información de la propiedad</legend>
            <label for="habitaciones">Habitaciones</label>
            <input type="number" id="habitaciones" name="habitaciones" value="<?php echo $habitaciones ?>" placeholder="Ej: 3:" min="1" max="9">

            <label for="wc">Baños</label>
            <input type="number" id="wc" name="wc" value="<?php echo $wc ?>" placeholder="Ej: 3:" min="1" max="9">

            <label for="estacionamientos">Estacionamientos</label>
            <input type="number" id="estacionamientos" name="estacionamientos" value="<?php echo $estacionamientos ?>" placeholder="Ej: 3:" min="1" max="9">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor" id="vendedor">
                <option value="" disabled selected>-- seleccione</option>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <option <?php echo $vendedorId === $row["id"] ? "selected" : "" ?> value="<?php echo $row["id"]; ?>">
                        <?php echo $row["nombre"]." ".$row["apellido"]; ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" class="boton-verde" value="Crear Propiedad">
        <a href="/admin" class="boton-verde">Volver</a>

    </form>
</main>

<?php include_template("footer"); ?>