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
  <title>Settings | G1 Security</title>
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
              <a href="notification.php" class="nav-link"> <i class="nav-icon far fa-bell"></i>
                <p> Notifications </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="settings.php" class="nav-link active">
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
              <h1 class="m-0">Settings</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Settings</li>
              </ol>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <div class="paddingcenter">

        <!-- /.col -->
        <div class = "row">
        <div class="col-md-6">
          <div class = "card-body">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-bullhorn"></i>
              Notified Accounts
            </h3>
          </div>

          <!-- /.card-header -->
          <?php  
        if(isset($_POST['btnReplaceEmail'])){
          $emailquery = "UPDATE tblEmail SET userEmail ='$_POST[txtEmail]' WHERE idEmail = '1'";
          $emailquery_run = mysqli_query($conn,$emailquery);
         
        }
 ?>  
       
       <?php                   
               $detquery ="SELECT * FROM tblEmail";  
               $detresult = mysqli_query($conn, $detquery);
             
              
          ?> 
<div class = "">
 <div class="card-header">
                <h3 class="card-title">Active GMAIL Account</h3>
              </div>
 <div class="card-body">
                <table id="tblAddress" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Email Address</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php  
                          while($row = mysqli_fetch_array($detresult))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["userEmail"].'</td>  
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
            <?php
              $sqlSMS = "SELECT smsNumber FROM tblNumber";
              $resultSMS = $conn->query($sqlSMS);
                
               if(isset($_POST['btnReplaceNum'])){
                 $smsquery = "UPDATE tblNumber SET smsNumber ='$_POST[txtNumber]' WHERE smsID = '1'";
                 $smsquery_run = mysqli_query($conn,$smsquery);

                 
               }
               
           ?>
            <?php  
      $numquery ="SELECT * FROM tblNumber";  
      $numresult = mysqli_query($conn, $numquery);  
 ?> 

<div class = "">
 <div class="card-header">
                <h3 class="card-title">Active Mobile Number</h3>
              </div>                                                          
 <div class="card-body">
                <table id="tblAddress" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Mobile Number</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php  
                          while($row = mysqli_fetch_array($numresult))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["smsNumber"].'</td>  
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
            </div>
                        </div>
                        </div>
          <div class="card-body">
            <div class="callout callout-danger">
              <h5>GMAIL ACCOUNT</h5>
       <br>


              <form action="" method="POST">
              <div class="form-group">
                  <input type="text" class="form-control" name="txtEmail" placeholder="Enter New Email" required> <br>
                
                <input type="submit" name="btnReplaceEmail" value="Replace E-mail" class="btn btn-block btn-info" />
              </div>
              </form>
            </div>
  
 
            <div class="callout callout-warning">
              <h5>MOBILE NUMBER</h5>


              <br>

            <form action="" method="POST">
              <div class="form-group">
                <input type="text" pattern=".{11}" class="form-control" name="txtNumber" placeholder="Enter your 11-digit number" required > <br>
                <input type="submit" name="btnReplaceNum" value="Replace Number" class="btn btn-block btn-info" />
              </div>
            </form>
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
    $('tblAddress').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('tblNum').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body> 
</html>