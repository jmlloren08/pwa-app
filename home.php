<?php

session_start();
if (!isset($_SESSION['user'])) {
  header('Location: index.php');
  exit;
}

$user = $_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">

<?php include('sections/header.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <?php include('sections/navbar.php'); ?>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <a href="#" class="brand-link">
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/c/c9/Department_of_the_Interior_and_Local_Government_%28DILG%29_Seal_-_Logo.svg"
          alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">DILG RO IX</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./pages/tables/data.php" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Tables
                </p>
              </a>
            </li>
            <li class="nav-header">Manage</li>
            <li class="nav-item">
              <a href="./pages/employee.php" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Employees</p>
              </a>
            </li>
            <li class="nav-header">Reports</li>
            <li class="nav-item">
              <a href="./pages/payroll.php" class="nav-link">
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
              <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>0-7</h3>

                  <p>Category A</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                <a href="pages/category/category-a.php" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>8-12</h3>

                  <p>Category B</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                <a href="pages/category/category-b.php" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>13-15</h3>

                  <p>Category C</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                <a href="pages/category/category-c.php" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>16-19</h3>

                  <p>Category D</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                <a href="pages/category/category-d.php" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
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
                  <h3 class="card-title">Table</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Birthdate</th>
                        <th>Age</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include_once('conn.php');
                      $sql = "SELECT *, TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) AS age FROM mytable";
                      $query = $conn->prepare($sql);
                      $query->execute();
                      $result = $query->setFetchMode(PDO::FETCH_ASSOC);
                      while ($row = $query->fetch()) { ?>
                        <tr>
                          <td>
                            <?php echo $row['id']; ?>
                          </td>

                          <?php
                          $fname = $row['first_name'];
                          $lname = $row['last_name'];
                          $name = $fname . " " . $lname;
                          ?>
                          <td>
                            <?php echo $name; ?>
                          </td>
                          <td>
                            <?php echo $row['email']; ?>
                          </td>
                          <td>
                            <?php echo $row['address']; ?>
                          </td>
                          <td>
                            <?php echo $row['birthdate']; ?>
                          </td>
                          <td>
                            <?php echo $row['age']; ?>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Birthdate</th>
                        <th>Age</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    <!-- show modal if edit-->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update record</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Firstname:</span>
                </div>
                <input type="text" class="form-control" id="first_name" name="first_name"
                  aria-describedby="inputGroup-sizing-sm" required>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Lastname:</span>
                </div>
                <input type="text" class="form-control" id="last_name" aria-describedby="inputGroup-sizing-sm" required>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Email:</span>
                </div>
                <input type="text" class="form-control" id="email" aria-describedby="inputGroup-sizing-sm" required>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Address:</span>
                </div>
                <input type="text" class="form-control" id="address" aria-describedby="inputGroup-sizing-sm" required>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Birthdate:</span>
                </div>
                <input type="text" class="form-control" id="birthdate" aria-describedby="inputGroup-sizing-sm" required>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" data-bs-submit="btnSaveChanges">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- show modal if delete -->

    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this record?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Firstname:</span>
                </div>
                <input type="text" class="form-control" id="first_name2" aria-describedby="inputGroup-sizing-sm"
                  readonly>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Lastname:</span>
                </div>
                <input type="text" class="form-control" id="last_name2" aria-describedby="inputGroup-sizing-sm"
                  readonly>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Email:</span>
                </div>
                <input type="text" class="form-control" id="email2" aria-describedby="inputGroup-sizing-sm" readonly>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Address:</span>
                </div>
                <input type="text" class="form-control" id="address2" aria-describedby="inputGroup-sizing-sm" readonly>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Birthdate:</span>
                </div>
                <input type="text" class="form-control" id="birthdate2" aria-describedby="inputGroup-sizing-sm"
                  readonly>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
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

  <?php include('./sections/scripts.php'); ?>

</body>

</html>