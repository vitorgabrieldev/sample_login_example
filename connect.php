<?php

    // --- * --- DB Connection --- * ---
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "system_users";


    $mysqli = new mysqli($dbHost,$dbUser,$dbPass,$dbName);

    if($mysqli->connect_errno) {
        echo "Error";
    } else {
        echo "DATABASE : Connect...";
    };

?>