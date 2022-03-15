<?php require 'app.php';
function include_template(string $name, bool $MainPage = false)
{
    include TEMPLATE_URL . "/${name}.php";
}

function is_auth(): bool {
    session_start();
    $auth = $_SESSION["login"];

    if ($auth) {
       return true;
    }
    return false;
    
}
