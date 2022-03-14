<?php

$id = filter_var($_GET["id"], FILTER_VALIDATE_INT); // checking a valid id

if (!$id) {
    header("Location: /admin");
}

require '../../includes/config/database.php';
$db = connect_db(); // data base connection

$query = "SELECT * FROM propiedades WHERE id=${id}";
$result = mysqli_query($db, $query);
$propiedad = mysqli_fetch_assoc($result);

$errores = []; //errors messages array
$titulo = $propiedad["titulo"];
$precio = $propiedad["precio"];
$descripcion = $propiedad["descripcion"];
$habitaciones = $propiedad["habitaciones"];
$wc = $propiedad["wc"];
$estacionamientos = $propiedad["estacionamientos"];
$vendedorId = $propiedad["vendedorId"];
$imagenPropiedad = $propiedad["imagen"];

$query = "SELECT * FROM vendedores";
$result = mysqli_query($db, $query);

if ($_SERVER['REQUEST_METHOD'] === 'POST') { //Execute code just after submit the form
    $titulo = mysqli_real_escape_string($db, $_POST["titulo"]); //mysql scape is used to sanitize the received data
    $precio = mysqli_real_escape_string($db, $_POST["precio"]);
    $imagen = $_FILES["imagen"];
    $descripcion = mysqli_real_escape_string($db, $_POST["descripcion"]);
    $habitaciones = mysqli_real_escape_string($db, $_POST["habitaciones"]);
    $wc = mysqli_real_escape_string($db, $_POST["wc"]);
    $estacionamientos = mysqli_real_escape_string($db, $_POST["estacionamientos"]);
    $creado = date('Y/m/d');
    $vendedorId = mysqli_real_escape_string($db, $_POST["vendedor"]);

    if (!isset($titulo) || trim($titulo) == '')
        $errores[] = "Debes Añadir un titulo";

    if (!isset($precio) || is_numeric($precio) == '')
        $errores[] = "Debes ingresar un precio)";

    if (!isset($descripcion) || sizeof(explode(" ", $descripcion)) < 10)
        $errores[] = "La descripcion debe tener almenos 10 Caracteres";

    if (!isset($habitaciones) || trim($habitaciones) == '')
        $errores[] = "El número de habitaciones es obligatorio";

    if (!isset($wc) || trim($wc) == '')
        $errores[] = "El número de baños es obligatorio";

    if (!isset($estacionamientos) || trim($estacionamientos) == '')
        $errores[] = "El número de habitaciones es obligatorio";

    if (!isset($vendedorId) || trim($vendedorId) == '')
        $errores[] = "Elige un vendedor";

    if ($imagen["size"] > 2e6)
        $errores[] = "El tamaño de la imagen debe ser menor a 2 Mb"; //by default php limit the image size to 2 Mb


    // ---------- Insert data into database------------------
    if (empty($errores)) {

        $dirImages = "../../build/imgPropierties/"; // path of the folder to save the image
        if (!is_dir($dirImages)) { // make dir for propierties images
            mkdir($dirImages);
        }
    
        echo $propiedad["imagen"];
        
        if ($imagen["name"]) {
            unlink($dirImages . $propiedad["imagen"]);
            $imgName = md5(uniqid(rand(), true)) . ".jpg"; //generating unique name
            move_uploaded_file($imagen["tmp_name"], $dirImages . $imgName); //upload image in the server
        } else {
            $imgName = $propiedad["imagen"];
        }

        $query = "UPDATE propiedades SET titulo = '${titulo}', precio = '${precio}', imagen = '${imgName}', descripcion = '${descripcion}',
        habitaciones = ${habitaciones}, wc = ${wc}, estacionamientos = ${estacionamientos}, vendedorId= ${vendedorId} WHERE id = ${id} ";

        $result = mysqli_query($db, $query);

        if ($result) {
            header("Location: /admin?result=2"); //Reroute user and show query string
        }
    }
}
require '../../includes/functions.php';
include_template("header"); ?>
<!-- // loading web site header -->

<main class="contenedor seccion">
    <h1>Actualizar propiedad</h1>

    <?php foreach ($errores as $error) : ?>
        <!-- List error in site -->
        <div class="alerta error"> <?php echo $error; ?> </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo $titulo ?>" placeholder="Título de la propiedad">

            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" value="<?php echo $precio ?>" placeholder="Precio. Ej: 120000000">

            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">
            <img class="imagen-small" src="../../build/imgPropierties/<?php echo $imagenPropiedad ?>">

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
            <select id="vendedor" name="vendedor">
                <option value="" disabled selected>-- seleccione</option>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <option <?php echo $vendedorId === $row["id"] ? "selected" : "" ?> value="<?php echo $row["id"]; ?>">
                        <?php echo $row["nombre"] . " " . $row["apellido"]; ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" class="boton-verde" value="Actualizar Propiedad">
        <a href="/admin" class="boton-verde">Volver</a>

    </form>
</main>

<?php include_template("footer"); ?>