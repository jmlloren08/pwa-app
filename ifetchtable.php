<?php
    include_once('conn.php');

    $dataload = array('error'=> false);

    $id = $_POST['id'];
    $sql = "SELECT * FROM mytable WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $dataload['data'] = mysqli_fetch_assoc($result);

    echo json_encode($dataload);
?>