<?php

session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}

$user = $_SESSION['user'];
$id = null;
$fullname = null;
$position = null;
$salary = null;
$lbpaccount = null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#FFFFFF">
  <title>DILG RO IX | Dashboard</title>

  <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/assets/css/docs.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="manifest" href="manifest.json">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link">Welcome,
            <?php echo $user; ?>!
            <i></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">Settings</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-user-circle"></i> Account Profile
            </a>
            <div class="dropdown-divider"></div>
            <a href="logout.php" class="dropdown-item">
              <i class="fas fa-power-off"></i> Logout
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c9/Department_of_the_Interior_and_Local_Government_%28DILG%29_Seal_-_Logo.svg"
                    alt="DILG RO IX" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">DILG RO IX</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="../" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../pages/tables/data.php" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tables
                                    <i></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Manage</li>
                        <li class="nav-item">
                            <a href="../pages/employee.php" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Employees</p>
                            </a>
                        </li>
                        <li class="nav-header">Reports</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Payroll</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Manage Payroll</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../../home.php">Home</a></li>
                                <li class="breadcrumb-item active">Payroll</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Payroll</h3>
                                </div>

                                <form action="payroll.php" method="post">
                                    <div class="row">
                                        <div class="col-lg">
                                            <div class="card card-primary">
                                                <div class="card-header">
                                                    <h3 class="card-title">Add employee</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">

                                                        <select class="form-control"
                                                            onchange="location='?id='+this.options[this.selectedIndex].value"
                                                            id="empno" name="empno">
                                                            <option value="" disabled selected>--- Select
                                                                employee
                                                                ---
                                                            </option>

                                                            <?php
                                                            include('../conn.php');

                                                            if (isset($_GET['id'])) {
                                                                $id = $_GET['id'];
                                                            }
                                                            $sql = "SELECT empnumber, fname, mname, lname, CONCAT_WS(' ', fname, mname, lname) AS fullname FROM tblemployees";
                                                            $query = $conn->prepare($sql);
                                                            $query->execute();
                                                            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
                                                            while ($row = $query->fetch()) { ?>
                                                                <?php
                                                                $empnumber = $row['empnumber'];
                                                                $fullname = $row['fullname'];
                                                                ?>
                                                                <option value="<?= $empnumber ?>" <?= (isset($_GET['id']) ? $id == $empnumber ? "selected" : "" : "") ?>>
                                                                    <?php echo $fullname; ?>
                                                                </option>
                                                            <?php } ?>

                                                        </select>

                                                    </div>

                                                    <div class="row">

                                                        <?php
                                                        $sql = "SELECT position, salary, lbpaccount, CONCAT(FORMAT(salary, 2)) AS salary FROM tblemployees WHERE empnumber ='$id'";
                                                        $query = $conn->prepare($sql);
                                                        $query->execute();
                                                        $result = $query->setFetchMode(PDO::FETCH_ASSOC);
                                                        while ($row = $query->fetch()) { ?>
                                                            <?php
                                                            $position = $row['position'];
                                                            $salary = $row['salary'];
                                                            $lbpaccount = $row['lbpaccount'];
                                                            ?>

                                                        <?php } ?>

                                                        <div class="col-4">
                                                            <label for="exampleInputPassword1">Position</label>
                                                            <input type="text" class="form-control"
                                                                value="<?= $position ?>" id="position" name="position"
                                                                placeholder="" disabled>
                                                        </div>
                                                        <div class="col-3">
                                                            <label>Salary</label>
                                                            <input type="text" class="form-control" value="<?= $salary ?>"
                                                                id="salary" name="salary" placeholder="" disabled>
                                                        </div>
                                                        <div class="col-4">
                                                            <label>LBP Account</label>
                                                            <input type="text" class="form-control"
                                                                value="<?= $lbpaccount ?>" id="lbpaccount"
                                                                name="lbpaccount" placeholder="" disabled>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg">
                                            <div class="card card-danger">
                                                <div class="card-header">
                                                    <h3 class="card-title">Deductions</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label>No. of Days Absent</label>
                                                            <input type="number" class="form-control"
                                                                placeholder="Number only" name="daysabsent"
                                                                id="daysabsent">
                                                        </div>
                                                        <div class="col-5">
                                                            <label>No. of Minutes Late/Undertime</label>
                                                            <input type="number" class="form-control"
                                                                placeholder="Number only" name="minuteslate"
                                                                id="minuteslate">
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-group clearfix">
                                                                <div class="icheck-danger row">
                                                                    <input type="checkbox" name="percentagetax"
                                                                        id="percentagetax" value="3">
                                                                    <label for="percentagetax">Percentage Tax (3%)</label>
                                                                </div>
                                                                <div class="icheck-danger row">
                                                                    <input type="checkbox" name="ewt" id="ewt"
                                                                        value="2">
                                                                    <label for="ewt">Expanded Witholding Tax (2%)</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm p-2">
                                                <button type="submit" class="btn btn-success col-4">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <?php include('../insertData.php'); ?>
                            </div>
                            <!-- /.card -->
                            <div class="card p-3">
                                <div class="card-header">
                                    <h3 class="card-title">List</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 300px; font-size: 12px;">Name</th>
                                                <th style="width: 150px; font-size: 12px;">Position</th>
                                                <th style="width: 100px; font-size: 12px;">Salaries and Wages</th>
                                                <th style="width: 100px; font-size: 12px;">No. of Days Absent</th>
                                                <th style="width: 100px; font-size: 12px;">No. of Minutes Late/Undertime</th>
                                                <th style="width: 100px; font-size: 12px;">Salary Deduction <br> (Absences/Late)</th>
                                                <th style="width: 150px; font-size: 12px;">Quincena</th>
                                                <th style="width: 150px; font-size: 12px;">Gross Amount Earned</th>
                                                <th style="width: 150px; font-size: 12px;">Percentage Tax (3%)</th>
                                                <th style="width: 150px; font-size: 12px;">Expanded Witholding Tax (2%)</th>
                                                <th style="width: 150px; font-size: 12px;">Total Deductions</th>
                                                <th style="width: 150px; font-size: 12px;">Net Amount Due</th>
                                                <th style="width: 150px; font-size: 12px;">LBP ACCOUNT #</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                            include_once('../conn.php');
                                            $sql = "SELECT *, CONCAT(FORMAT(salaries, 2)) AS salary FROM tblpayroll";
                                            $query = $conn->prepare($sql);
                                            $query->execute();
                                            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
                                            while ($row = $query->fetch()) { ?>
                                                <tr>
                                                    <td style="width: 800px; font-size: 14px;">
                                                        <?php echo $row['fullname']; ?>
                                                    </td>
                                                    <td style="font-size: 14px;">
                                                        <?php echo $row['position']; ?>
                                                    </td>
                                                    <td style="font-size: 14px;">
                                                        <?php echo $row['salary']; ?>
                                                    </td>
                                                    <td style="font-size: 14px;">
                                                        <?php echo $row['noofdaysabsent']; ?>
                                                    </td>
                                                    <td style="font-size: 14px;">
                                                        <?php echo $row['noofminuteslate']; ?>
                                                    </td>
                                                    <td style="font-size: 14px;">
                                                        <?php echo number_format($row['salarydeduction'], 2)?>
                                                    </td>
                                                    <td style="font-size: 14px;">
                                                        <?php echo number_format($row['quincena'], 2)?>
                                                    </td>
                                                    <td style="font-size: 14px;">
                                                        <?php echo number_format($row['grossamountearned'], 2)?>
                                                    </td>
                                                    <td style="font-size: 14px;">
                                                        <?php echo $row['percentagetax']; ?>
                                                    </td>
                                                    <td style="font-size: 14px;">
                                                        <?php echo $row['expandedwitholdingtax']; ?>
                                                    </td>
                                                    <td style="font-size: 14px;">
                                                        <?php echo number_format($row['totaldeductions'], 2)?>
                                                    </td>
                                                    <td style="font-size: 14px;">
                                                        <?php echo number_format($row['netamountdue'], 2)?>
                                                    </td>
                                                    <td style="font-size: 14px;">
                                                        <?php echo $row['lbpaccount']; ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="width: 300px; font-size: 12px;">Name</th>
                                                <th style="width: 150px; font-size: 12px;">Position</th>
                                                <th style="width: 100px; font-size: 12px;">Salaries and Wages</th>
                                                <th style="width: 100px; font-size: 12px;">No. of Days Absent</th>
                                                <th style="width: 100px; font-size: 12px;">No. of Minutes Late/Undertime</th>
                                                <th style="width: 100px; font-size: 12px;">Salary Deduction <br> (Absences/Late)</th>
                                                <th style="width: 150px; font-size: 12px;">Quincena</th>
                                                <th style="width: 150px; font-size: 12px;">Gross Amount Earned</th>
                                                <th style="width: 150px; font-size: 12px;">Percentage Tax (3%)</th>
                                                <th style="width: 150px; font-size: 12px;">Expanded Witholding Tax (2%)</th>
                                                <th style="width: 150px; font-size: 12px;">Total Deductions</th>
                                                <th style="width: 150px; font-size: 12px;">Net Amount Due</th>
                                                <th style="width: 150px; font-size: 12px;">LBP ACCOUNT #</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="#">DILG RO IX</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 2.0.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <script src="../build/js/custom/getID.js"></script>
    <script src="../plugins/jquery/jquery.min.js"></script>
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/jszip/jszip.min.js"></script>
    <script src="../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="../dist/js/adminlte.min.js"></script>
    <script src="../build/js/custom/app.js"></script>
    <script src="../build/js/custom/datatables.js"></script>
    <script src="../build/js/custom/getID.js"></script>
    
</body>

</html>