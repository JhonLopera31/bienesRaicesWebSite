<?php
require "includes/functions.php"; // Require is better for functions
include_template("header") // include name, if main page
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Nuestro Blog</h1>
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
                <p>El escrito el: <span>07/03/2020</span> por: <span>admin</span></p>
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
                <p>El escrito el: <span>07/03/2020</span> por: <span>admin</span></p>
            </a>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate consectetur aperiam officiis
                repudiandaei</p>
        </div>
    </article>

    <article class="entrada-blog">

        <div class="imagen">
            <picture>
                <source srcset="build/img/blog3.webp" type="image/webp">
                <source srcset="build/img/blog3.jpg" type="image/jpeg">
                <img src="build/img/blog3.jpg" alt="imagen blog3" loading="lazy">
            </picture>
        </div>

        <div class="texto-entrada">
            <a href="entrada.php">
                <h4>Terraza en el techo de tu casa</h4>
                <p>El escrito el: <span>07/03/2020</span> por: <span>admin</span></p>
            </a>
            <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando
                dinero</p>
        </div>

    </article>

    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog4.webp" type="image/webp">
                <source srcset="build/img/blog4.jpg" type="image/jpeg">
                <img src="build/img/blog4.jpg" alt="imagen blog4" loading="lazy">
            </picture>
        </div>

        <div class="texto-entrada">
            <a href="entrada.php">
                <h4>Guía para decoración de tu hogar</h4>
                <p>El escrito el: <span>07/03/2020</span> por: <span>admin</span></p>
            </a>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate consectetur aperiam officiis
                repudiandaei</p>
        </div>
    </article>
</main>

<?php include_template("footer");?>