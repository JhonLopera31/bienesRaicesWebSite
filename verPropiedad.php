<?php

$id= filter_var($_GET["id"], FILTER_VALIDATE_INT);

require 'includes/config/database.php';
$db = connect_db();
$query = "SELECT * FROM propiedades WHERE id =${id}";
$result = mysqli_query($db,$query);
$propiedad = mysqli_fetch_assoc($result);

if (!$id || !$result->num_rows){ //check if the id is valid or if exist in the data base
    header("Location: /");
}

require "includes/functions.php"; // Require is better for functions
include_template("header") // include name, if main page
?>

<main class="contenedor seccion contenido-centrado">
    <h1><?php echo $propiedad["titulo"]?></h1>

    <img src="/build/imgPropierties/<?php echo $propiedad["imagen"]?>" alt="anuncio" loading="lazy">

    <div class="resumen-propiedad">
        <p class="precio">$<?php echo $propiedad["precio"]?></p>

        <ul class="iconos-caracteristicas">
            <li>
                <img src="/build/img/icono_wc.svg" alt="icono wv">
                <p><?php echo $propiedad["wc"]?></p>
            </li>
            <li>
                <img src="/build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p><?php echo $propiedad["estacionamientos"]?></p>
            </li>
            <li>
                <img src="/build/img/icono_dormitorio.svg" alt="iconodormitorio">
                <p><?php echo $propiedad["habitaciones"]?></p>
            </li>
        </ul>

        <p><?php echo $propiedad["descripcion"]?></p>
    </div>
</main>

<?php 
mysqli_close($db);
include_template("footer"); 
?>