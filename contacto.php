<?php
require "includes/functions.php"; // Require is better for functions
IncludeTemplate("header") // include name, if main page
?>

<main class="contenedor seccion">
    <h1>Contacto</h1>
    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img src="build/img/destacada3.jpg" alt="imagen blog4" loading="lazy">
    </picture>

    <h2>Llene el formulario de contacto</h2>

    <form class="formulario">
        <fieldset>
            <legend>Información Personal</legend>
            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Nombre" id="nombre">

            <label for="email">E-mail</label>
            <input type="email" placeholder="E-mail" id="email">

            <label for="telefono">Teléfono</label>
            <input type="tel" placeholder="Telefono" id="telefono">

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" placeholder="Su mensaje"></textarea>

        </fieldset>

        <fieldset>
            <legend>Información sobre la propiedad</legend>
            <label for="opciones">Vende o Compra</label>
            <select name="" id="opciones">
                <option value="" disabled selected>--Seleccione</option>
                <option value="compra">Compra</option>
                <option value="vende">Vende</option>
            </select>

            <label for="presupuesto">Precio o Presupuesto</label>
            <input type="number" id="presupuesto">

        </fieldset>

        <fieldset>
            <legend>Contacto</legend>
            <p>Como desea ser contactado</p>

            <div class="forma-contacto">
                <label for="contactar-telefono">Teléfono</label>
                <input type="radio" value="telefono" name="contacto" id="contactar-telefono">

                <label for="contactar-email">E-mail</label>
                <input type="radio" value="email" name="contacto" id="contactar-email">
            </div>

            <p>Fecha y hora para ser contactado</p>

            <label for="fecha">Fecha</label>
            <input type="date" name="" id="fecha">

            <label for="Hora">Hora</label>
            <input type="time" name="" id="Hora" min="09:00" max="18:00">
        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde">
    </form>
</main>
<?php IncludeTemplate("footer");?>