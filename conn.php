<?php

    $conn = mysqli_connect('mysql:unix_socket=/cloudsql/pwa-app-project-386102:asia-east1:pwa-app-project','root','','db_students');

    if(!$conn){
        die("Connection failed:" . mysqli_connect_error());
    }else{
        echo "Connected successfully";
    }

    echo "Connected!";
?>