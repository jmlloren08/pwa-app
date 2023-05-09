<?php

    $conn = mysqli_connect('localhost','root','','db_students');

    if(!$conn){
        die("Connection failed:" . mysqli_connect_error());
    }
?>