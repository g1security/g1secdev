<?php 
session_start(); 
include "global_variables_for_db.php";

if($_SESSION['username']==null){
    ?>
<script>
  alert("Login first!");
  window.location.replace("loginform.php");
</script>
<?php
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" type="image/png" href="g1logo.png"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Notifications | G1 Security</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
    .paddingcenter {
      padding-left: 20px;
      padding-right: 20px;
    }
  </style>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item"> <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
              class="fas fa-bars"></i></a> </li>
        <li class="nav-item d-none d-sm-inline-block"> <a href="index.php" class="nav-link">Home</a> </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button"> <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" role="button"> <i class="fas fa-sign-out-alt"></i> </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link"> <img src="dist/img/logo1.png" alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8"> <span class="brand-text font-weight-light">G1
          Security</span> </a>
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image"> <img src="images/admin.png" class="img-circle elevation-2" alt="User Image"> </div>
          <div class="info">
            <a href="#" class="d-block">
              <?php echo $_SESSION['username'];?>
            </a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="index.php" class="nav-link"> <i class="nav-icon fas fa-tachometer-alt"></i>
                <p> Dashboard </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="regusers.php" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Registered Users
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="activitylogs.php" class="nav-link">
                <i class="nav-icon fas fa-user-clock"></i>
                <p>
                  User Monitoring
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="notification.php" class="nav-link active"> <i class="nav-icon far fa-bell"></i>
                <p> Notifications </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="settings.php" class="nav-link">
                <i class="nav-icon fas fa-archive"></i>
                <p>
                  Settings
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="About.php" class="nav-link"> <i class="nav-icon fas fa-th"></i>
                <p> About </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-4">
            <div class="col-sm-6">
              <h1 class="m-0">Notifications</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Notifications</li>
              </ol>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <div class="paddingcenter">
       
      <div class="">
              <?php  
      $query ="SELECT * FROM tblSMS";  
      $result = mysqli_query($conn, $query);  
 ?>  
 <div class = "card">
 <div class="card-header">
                <h3 class="card-title">SMS sent</h3>
              </div>
 <div class="card-body">
                <table id="tblSMSsent" class="table table-bordered table-striped table-hover text-nowrap">
                  <thead>
                  <tr>
                    <th>Date Sent</th>
                    <th>Mobile Number</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["smssentdate"].'</td>  
                                    <td>'.$row["mobileNo"].'</td>  
                               </tr>  
                               ';  
                          }  
                          ?>  
                  </tbody>
                  <tfoot></tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
                <!--/.card -->
              </div>
              
              <div class="">
              <?php  
      $emquery ="SELECT * FROM tblEmailAdd";  
      $emresult = mysqli_query($conn, $emquery);  
 ?>  
 <div class = "card">
 <div class="card-header">
                <h3 class="card-title">Emails Sent</h3>
              </div>
 <div class="card-body">
                <table id="tblEmailsent" class="table table-bordered table-striped table-hover text-nowrap">
                  <thead>
                  <tr>
                    <th>Date Sent</th>
                    <th>Email Address</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php  
                          while($row = mysqli_fetch_array($emresult))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["emaildate"].'</td>  
                                    <td>'.$row["address"].'</td>  
                               </tr>  
                               ';  
                          }  
                          ?>  
                  </tbody>
                  <tfoot></tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
                <!--/.card -->
              </div>
 
          </div>
     
        <!-- /.col -->
      </div>
      <!-- /.card -->
                        </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
          <!-- /.col -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  <!-- Main Footer -->
  <footer class="main-footer"> <strong>Copyright &copy; 2021 <a href="index.php">G1 Security</a>.</strong> All rights reserved.
    <div class="float-right d-none d-sm-inline-block"> <b>Version</b> 3.1.0 </div>
  </footer>
  <!-- ./wrapper -->
  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="dist/js/adminlte.min.js"></script>

<script src="dist/js/demo.js"></script>
  <script src="dist/js/pages/dashboard2.js"></script>
  <script>
  $(function () {
    $("#tblSMSsent").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      order: [[0, 'desc']],
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tblSMSsent_wrapper .col-md-6:eq(0)');
    $("#tblEmailsent").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      order: [[0, 'desc']],
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tblEmailsent_wrapper .col-md-6:eq(0)');
  });
</script>
</body> 
</html>