<?php 
    session_start(); // start session to get super var $_SESSION
    $_SESSION =[]; // reset var $_SESSION to close the session
    header("Location: /");

?>