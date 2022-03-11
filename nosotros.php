
<?php
require "includes/functions.php"; // Require is better for functions
IncludeTemplate("header") // include name, if main page
?>

    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpeg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="imagen nosotros" loading="lazy">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta cumque error neque facere aliquid
                    quidem voluptas magni consequuntur recusandae! Eaque natus aspernatur corrupti necessitatibus
                    recusandae facere tenetur quisquam provident adipisci.
                    Totam non fuga ducimus. Sit minus fuga unde quas ipsam consequuntur, impedit, excepturi nulla,
                    nostrum iusto officiis odit necessitatibus! Laboriosam libero ipsa veritatis nemo vel debitis
                    commodi aperiam! Accusamus, corrupti!
                  
                </p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In perspiciatis distinctio voluptatum minus
                    dicta porro neque incidunt, ab nemo quisquam omnis vitae, ratione eligendi quasi et id reprehenderit
                    harum tempore.</p>
            </div>
        </div>

    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

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
    </section>
    <?php IncludeTemplate("footer");?>
