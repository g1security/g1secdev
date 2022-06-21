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
  <title>About | G1 Security</title>
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
    h3, h4, p {
      text-align: center;

    }
    #aboutxt {
      padding-left: 40px;
      padding-right: 40px;
      padding-top: 40px;
      padding-bottom: 40px;
    }
    img {
      border-radius: 50%
    }
    #images{

    }
    * {
  box-sizing: border-box;
      }

      .column {
        
        float: left;
        width: 25%;
        padding: 5px;
      }

      /* Clearfix (clear floats) */
      .row::after {
        content: "";
        clear: both;
        display: table;
      }

      /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
      @media screen and (max-width: 500px) {
        .column {
          width: 100%;
        }
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
              <a href="settings.php" class="nav-link">
                <i class="nav-icon fas fa-archive"></i>
                <p>
                  Settings
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link active"> <i class="nav-icon fas fa-th"></i>
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
              <h1 class="m-0">About</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">About</li>
              </ol>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <div class="paddingcenter">
        <div class = "card" id = "aboutxt">
      <h3>IMPORTANCE AND TIPS ON HOW TO IMPROVE HOME SECURITY</h3>
      <p>A security system offers protection for your loved ones and property, as well as peace of mind. While property crime has dropped more than 6% - the sixteenth year in a row it has declined, according to the FBI – it's still an instinct to protect what we love, no matter what statistics say. 
        Today’s security systems also can act as a hub for automation systems, adding convenience and energy savings, which makes their cost more attractive.</p>
        <br>
        <h4>Install an Alarm System</h4>
        <p>A security system won't keep burglars out, but it may help as a deterrent. If the alarm is installed and maintained to an approved standard, you may qualify for a discount on your home insurance.</p>
        <br>
        <h4>Limit Access to Your Property</h4>
        <p>Owner’s have a right to limit the access in entering their property, you do not have the right to enter private property without the owner's permission.</p>
        <br>
        <h4>Don't keep valuables in plain sight</h4>
        <p>Don't leave expensive items like jewelry and smartphones lying around. These are easy to pocket and take away by a burglar.</p>
        <br>
        <h4>Check for obvious flaws</h4>
        <p>You see your home every day, and it can be easy to overlook any weaknesses in your home security. Have a friend look around the outside of your home and see if they can spot any easy ways in.</p>
        <br>
        <h4>Lock Everything Up That Can Be Used to Break into Your Property</h4>
        <p>Don't leave ladders, garden tools, metal bars, etc., lying about which could be used by burglars to gain access to the house.</p>
  </div>
  <div class = "card" id = "aboutxt">
      <h3>ABOUT US</h3>
      <p>Small businesses spend a lot of money to secure their premises. We’re here with a solution.</p>
        <br>
        <h4>OUR MISSION</h4>
        <p>Security is constantly changing. The first to innovate redefines the succeeding challenges others will face. Threats of today include diseases that most were not prepared for. Some lie and wait for others to follow. At G1 Security, we challenge change. Our mission is to detect, inform, and defend employees every day without overcomplicating the process. Our security system tracks who goes in and out of the premise while ensuring they are in stable condition. Information is what people use to decide the next big thing so we simplify a web application where everything is safely secured and easily accessible, 
          from the time of entering the building, to the recorded temperature of the individual, same goes to any unauthorized personnel that might be up to no good.</p>
        <p> We may be starting but we plan to finish what we started here at G1 Security. </p>
        <br>
        <h4>WHO WE ARE?</h4>
        <p>Graduating students ready to headfirst dive into trouble. Trying to make sense of the world is what we try to do and use what we learn to apply in our respective field. We understand that like change, technology will continually evolve, and we need to get better at adapting those changes. 
          Someday, we will contribute something to society and this project will be our first.</p>
          
        <div class="row" id= "images">
            <div class="column">
              <img src="ljdg.png" alt="Snow" style ="width: 100%">
              <div class="caption" style="text-align: center">Lalaine Joie de Guzman</div>
            </div>
            <div class="column">
              <img src="kmlp.jpg" alt="Forest" style ="width: 100%">
              <div class="caption" style="text-align: center">Kyle Michael Lorenz Papa</div>
            </div>
            <div class="column">
              <img src="math.png" alt="Snow" style ="width: 100%">
              <div class="caption" style="text-align: center">Jan Matthew Canezal</div>
            </div>
            <div class="column">
              <img src="josh.png" alt="Forest" style ="width: 100%">
              <div class="caption" style="text-align: center">Joshua David Ortega</div>
            </div>
        </div>
       
  </div>
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