<?php

    $conn = mysqli_connect('localhost','root','','studentsdata');

    if(!$conn){
        die("Connection failed:" . mysqli_connect_error());
    }
?>