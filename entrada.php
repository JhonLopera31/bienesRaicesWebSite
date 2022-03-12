<?php
require "includes/functions.php"; // Require is better for functions
include_template("header") // include name, if main page
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Guia para decoración de tu hogar</h1>
    <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp">
        <source srcset="build/img/destacada2.jpg" type="image/jpeg">
        <img src="build/img/destacada2.jpg" alt="anuncio" loading="lazy">
    </picture>

    <p class="meta-info">El escrito el: <span>07/03/2020</span> por: <span>Admin</span></p>

    <div class="resumen-propiedad">

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit quaerat quis possimus delectus nobis
            cupiditate? A quod nam quis quae voluptatibus ut, quos voluptate, eos quasi vel, laboriosam laudantium
            veniam? Fugit aspernatur at explicabo voluptates pariatur iusto, itaque eius sed quas ipsam exercitationem
            ducimus fugiat officia doloribus. Eaque exercitationem quibusdam omnis, repellendus dignissimos debitis,
            enim corporis assumenda expedita ratione laboriosam!

            Molestiae, expedita. Veniam illum, doloremque vel quam animi ut est. Eos aut eveniet error ea totam quo
            voluptate veritatis, autem praesentium qui hic, quod, dolores iste repudiandae minus rerum expedita!
            Consequatur at et, voluptatum reiciendis eveniet assumenda velit obcaecati recusandae. Id nemo,
            excepturi doloremque atque nihil sunt fugit vero ducimus suscipit beatae cupiditate voluptas amet porro
            repellendus dolor totam quisquam.
            Molestiae, expedita. Veniam illum, doloremque vel quam animi ut est. Eos aut eveniet error ea totam quo
            voluptate veritatis, autem praesentium qui hic, quod, dolores iste repudiandae minus rerum expedita!
            Consequatur at et, voluptatum reiciendis eveniet assumenda velit obcaecati recusandae. Id nemo,
            excepturi doloremque atque nihil sunt fugit vero ducimus suscipit beatae cupiditate voluptas amet porro
            repellendus dolor totam quisquam
        </p>
    </div>
</main>

<?php include_template("footer");?>