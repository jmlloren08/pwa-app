<?php
    include_once('conn.php');

    $dataload = array('error'=> false);

    $idd = $_POST['id'];
    $sql = "SELECT * FROM mytable WHERE id='$idd'";
    $result = mysqli_query($conn, $sql);
    $dataload['data'] = mysqli_fetch_assoc($result);

    echo json_encode($dataload);
?>