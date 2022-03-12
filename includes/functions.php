<?php require 'app.php';
function include_template (string $name,bool $MainPage=false){
    include TEMPLATE_URL."/${name}.php";
}