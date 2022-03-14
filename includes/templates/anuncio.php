<?php 
    require 'includes/config/database.php';

    $db = connect_db();
    if (!isset($limitImgToShow))
        $query = "SELECT * FROM propiedades";
    else
        $query = "SELECT * FROM propiedades LIMIT ${limitImgToShow}";

    $result = mysqli_query($db,$query);

?>

<div class="contenedor-anuncios">
    <?php while ($row=mysqli_fetch_assoc($result)):?>
    <div class="anuncio"> 
        <img src="/build/imgPropierties/<?php echo $row["imagen"];?>"  alt="anuncio" loading="lazy">

        <div class="contenido-anuncio">
            <h3><?php echo $row["titulo"];?></h3>
            <p><?php echo $row["descripcion"];?></p>
            <p class="precio">$<?php echo $row["precio"];?></p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img src="build/img/icono_wc.svg" alt="icono wv">
                    <p><?php echo $row["wc"];?></p>
                </li>
                <li>
                    <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p><?php echo $row["estacionamientos"];?></p>
                </li>
                <li>
                    <img src="build/img/icono_dormitorio.svg" alt="iconodormitorio">
                    <p><?php echo $row["habitaciones"];?></p>
                </li>
            </ul>
            <a href="verPropiedad.php?id=<?php echo $row["id"]; ?>" class="boton boton-amarillo">Ver propiedad</a>
        </div> 
    </div>
    <?php endwhile; ?>
</div> <!-- .contenedor-anuncios -->