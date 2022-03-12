<?php

function connect_db(): mysqli{
    $db = mysqli_connect('localhost','root','',"bienes_raices");

    if (!$db){
        echo "Error, no connected";
        exit;
    }
    return $db;
}