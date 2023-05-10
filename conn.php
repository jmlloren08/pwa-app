<?php

    $conn = mysqli_connect('104.199.204.91','root','','db_students');

    if(!$conn){
        die("Connection failed:" . mysqli_connect_error());
    }else{
        echo "Connected successfully";
    }

    echo "Connected!";
?>