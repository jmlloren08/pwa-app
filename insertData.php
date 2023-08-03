<?php

include_once('conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $empnumber = $_POST['empno'];
    $daysabsent = $_POST['daysabsent'];
    $minuteslate = $_POST['minuteslate'];
    $percentagetax = $_POST['percentagetax'];
    $ewt = $_POST['ewt'];
    $fullname = null;

    $sql = "SELECT fname, mname, lname, position, salary, lbpaccount, CONCAT_WS(' ', fname, mname, lname) AS fullname FROM tblemployees WHERE empnumber ='$empnumber'";
    $query = $conn->prepare($sql);
    $query->execute();
    $result = $query->setFetchMode(PDO::FETCH_ASSOC);
    while ($row = $query->fetch()) {
        $fullname = $row['fullname'];
        $position = $row['position'];
        $salary = $row['salary'];
        $lbpaccount = $row['lbpaccount'];
    }

    $perday = $salary / 22;
    $perhour = $perday / 8;
    $perminute = $perhour / 60;
  
    $newdaysabsent = $daysabsent * $perday;
    $newminuteslate = $minuteslate * $perminute;
    $salarydeduction = $newdaysabsent + $newminuteslate;
    $quincena = $salary / 2;
    $grossamountearned = $quincena - $salarydeduction;

    $pt = $grossamountearned * 0.03;
    $et = $grossamountearned * 0.02;

    $totaltax = $pt + $et;
    $totaldeductions = $pt+$et; //$salarydeduction + $totaltax;
    $netamountdue = $grossamountearned - $totaltax;
    
    $stmt = $conn->prepare("INSERT INTO tblpayroll (empnum, fullname, position, salaries,  noofdaysabsent, noofminuteslate, salarydeduction, quincena, grossamountearned, percentagetax, expandedwitholdingtax, totaldeductions, netamountdue, lbpaccount) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    try {
        $stmt->execute([$empnumber, $fullname, $position, $salary, $daysabsent, $minuteslate, $salarydeduction, $quincena, $grossamountearned, $percentagetax, $ewt, $totaldeductions, $netamountdue, $lbpaccount]);
        echo "Data inserted successfully!";

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>