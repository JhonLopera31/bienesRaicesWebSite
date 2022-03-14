<?php
require "includes/functions.php"; // Require is better for functions
include_template("header", $MainPage = true); // include name, if main page
?>

<main class="contenedor seccion">
    <h1>Más sobre nosotros</h1>

    <div class="iconos-nosotros">

        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, quisquam? At deleniti
                consectetur dolorem molestias nihil? Quisquam animi odio, esse, ab reprehenderit distinctio dolore
                ipsam nemo illum corrupti ipsa eius. Lo.</p>
        </div>

        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, quisquam? At deleniti
                consectetur dolorem molestias nihil? Quisquam animi odio, esse, ab reprehenderit distinctio dolore
                ipsam nemo illum corrupti ipsa eius. </p>
        </div>

        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>Tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, quisquam? At deleniti
                consectetur dolorem molestias nihil? Quisquam animi odio, esse, ab reprehenderit distinctio dolore
                ipsam nemo illum corrupti ipsa eius. </p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h2>Casas y Departamentos en Venta</h2>
    
    <?php 
        $limitImgToShow=3;
        include 'includes/templates/anuncio.php';
    ?>

    <div class="alinear-derecha">
        <a href="anuncios.php" class="boton-verde">Ver Todas</a>
    </div>
</section>


<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>LLena el formulario y un asesor se pondrá en contacto contigo a la brevedad</p>
    <a href="contacto.php" class="boton-amarillo-inline">Contactanos</a>
</section>


<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">

            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img src="build/img/blog1.jpg" alt="imagen blog1" loading="lazy">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="meta-info">El escrito el: <span>07/03/2020</span> por: <span>admin</span></p>
                </a>
                <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando
                    dinero</p>
            </div>

        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img src="build/img/blog2.jpg" alt="imagen blog2" loading="lazy">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para decoración de tu hogar</h4>
                    <p class="meta-info">El escrito el: <span>07/03/2020</span> por: <span>admin</span></p>
                </a>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate consectetur aperiam officiis
                    repudiandaei</p>
            </div>
        </article>

    </section>

    <section class="testimoniales">
        <h3>Testomoniales</h3>
        <div class="testimonial">
            <blockquote>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate consectetur aperiam officiis
                repudiandae possimus fugit cum deserunt magni
            </blockquote>
            <p>- Usuario x</p>
        </div>
    </section>
</div>

<?php include_template("footer");?>