
<?php
require "includes/functions.php"; // Require is better for functions
include_template("header") // include name, if main page
?>
    <main class="contenedor seccion">
    <?php 
        include 'includes/templates/anuncio.php';
    ?>
    </main>

<?php include_template("footer");?>