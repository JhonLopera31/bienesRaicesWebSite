<?php
require "includes/functions.php"; // Require is better for functions
include_template("header") // include name, if main page
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Casa en venta frente al bosque</h1>
    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img src="build/img/destacada.jpg" alt="anuncio" loading="lazy">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">$300.000.000</p>

        <ul class="iconos-caracteristicas">
            <li>
                <img src="/build/img/icono_wc.svg" alt="icono wv">
                <p>3</p>
            </li>
            <li>
                <img src="/build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p>3</p>
            </li>
            <li>
                <img src="/build/img/icono_dormitorio.svg" alt="iconodormitorio">
                <p>3</p>
            </li>
        </ul>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit quaerat quis possimus delectus nobis
            cupiditate? A quod nam quis quae voluptatibus ut, quos voluptate, eos quasi vel, laboriosam laudantium
            veniam?
            Fugit aspernatur at explicabo voluptates pariatur iusto, itaque eius sed quas ipsam exercitationem
            ducimus fugiat officia doloribus. Eaque exercitationem quibusdam omnis, repellendus dignissimos debitis,
            enim corporis assumenda expedita ratione laboriosam!
            Molestiae, expedita. Veniam illum, doloremque vel quam animi ut est. Eos aut eveniet error ea totam quo
            voluptate veritatis, autem praesentium qui hic, quod, dolores iste repudiandae minus rerum expedita!
            Consequatur at et, voluptatum reiciendis eveniet assumenda velit obcaecati recusandae. Id nemo,
            excepturi doloremque atque nihil sunt fugit vero ducimus suscipit beatae cupiditate voluptas amet porro
            repellendus dolor totam quisquam.</p>
    </div>
</main>

<?php include_template("footer"); ?>