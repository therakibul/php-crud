<?php  
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "jobApplication";

    $connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    if(!$connection){
        echo "No connection";
        die("No connection". mysqli_connect_error());
    }
?>