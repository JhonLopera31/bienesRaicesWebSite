<?php

require 'includes/config/database.php';
$db = connect_db();

$errores = [];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = mysqli_real_escape_string($db, filter_var($_POST["email"], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST["password"]);

    if (!$email) {
        $errores[] = "Correo invalido";
    }
    if (!$password) {
        $errores[] = "Contraseña inválida";
    }
    if (empty($error)) {
        $query = "SELECT * FROM usuarios WHERE email= '${email}'";
        $result = mysqli_query($db,$query);

        if ($result -> num_rows){
            $user = mysqli_fetch_assoc($result);
            $auth = password_verify($password,$user["password"]);

            if($auth){
                session_start();
                $_SESSION ["user"] = $user["email"];
                $_SESSION["login"] = true;
                header("Location: \admin");

            }else {
                $errores[]="El usuario no existe";
            }
        }else{
            $errores[]="El usuario no existe";
        }
    }
}
require 'includes/functions.php';
include_template("header");
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar sesion</h1>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario " method="POST">
        <fieldset>
            <legend>Email y Password</legend>

            <label for="email">E-mail</label>
            <input type="email" placeholder="E-mail" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" placeholder="password" id="password" name="password" required>

            <input type="submit" value="Iniciar sesion" class="boton-verde">

        </fieldset>

    </form>
</main>

<?php include_template("footer"); ?>