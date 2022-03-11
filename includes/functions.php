<?php require 'app.php';
function IncludeTemplate (string $name,bool $MainPage=false){
    include TEMPLATE_URL."/${name}.php";
}