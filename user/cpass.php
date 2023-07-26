<?php session_start(); ?>
<?php 
  include './include/mysqldb.php';
$a=$_SESSION['user'];
  $q=mysqli_query($db,"select title,name,passkey,mobile,email  from user_data where email='$a'");
 $qw=mysqli_fetch_assoc($q);
 $qt=$qw['mobile'];
 $qx=mysqli_query($db,"select bal from balance where mobile='$qt'");
 $qp=mysqli_fetch_assoc($qx);
 $xp=$qp['bal'];
?>


  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
      <meta name="author" content="Łukasz Holeczek">
      <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
      <title>ELECTRICAL POWER DISTRIBUTION MONITORING SYSTEM</title>
      <!-- Icons-->
      <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
      <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
      <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
      <!-- Main styles for this application-->
      <link href="css/style.css" rel="stylesheet">
      <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    </head>
    <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
      <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
          <span class="navbar-toggler-icon"></span>
        </button>
       &nbsp;&nbsp; <a class="navbar-brand" href="#">
    <?php echo "(Hello ".$qw['name'].")"."&nbsp;Bal:₦".($xp <= '0'?0:$xp); ?>
    <?php echo "<br/>"."Bill:₦".($xp < '0'?abs($xp):0); ?>
        </a>
      </header>
      <div class="app-body">
        <div class="sidebar">
          <nav class="sidebar-nav">
            <ul class="nav">
            <li class="nav-item">
                 <a class="nav-link" href="index.php">
                  <i class="nav-icon icon-speedometer"></i> Home
                </a>
              </li>
          
        <li class="nav-item">
                <a class="nav-link" href="order3.php">
                  <i class="nav-icon icon-drop"></i>Light
                </a>
              </li>
         <li class="nav-item">
                <a class="nav-link" href="complian.php">
                  <i class="nav-icon icon-drop"></i>Make Complain
                </a>
              </li>
        
        <li class="nav-item">
                <a class="nav-link" href="dst4.php">
                  <i class="nav-icon icon-drop"></i>Light History
                </a>
              </li>
        <li class="nav-item">
                <a class="nav-link" href="cpass.php">
                  <i class="nav-icon icon-drop"></i>Change Password
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./logout.php">
                  <i class="nav-icon icon-pencil"></i> Logout
                </a>
              </li>
            </ul>
          </nav>
          <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
        <main class="main" style="padding-top:15px; margin-left:300px;">
          <!-- Breadcrumb-->

          <div class="container-fluid">
            <div class="animated fadeIn">
              <div class="row">
                
                      <!--/.col-->
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-header">
                      <strong>User Details Change</strong>
                      <small>Form</small>
                    </div>
                    <div class="card-body">
                      <form  action="adchg.php" method="post">
                  
						 <!--/.row-->
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label for="ccnumber">Current Email</label>
                              <input type="email" class="form-control" id="email" placeholder="Enter email" name="cem"  required>
                            </div>
                          </div>
                        </div>
                        <!--/.row-->
						
						<!--/.row-->
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label for="ccnumber">New Email</label>
                              <input type="email" class="form-control" id="email" placeholder="Enter email" name="nem"  required>
                            </div>
                          </div>
                        </div>
                        <!--/.row-->
						 
						  <!--/.row-->
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label for="ccnumber">Password</label>
                              <input type="text" class="form-control" id="name" placeholder="Enter password" name="ps"  required>
                            </div>
                          </div>
                        </div>
                        <!--/.row-->

                        <div class="row">
                          <div class="col-sm-12">
                            <input type="submit" name="fb" value="Change" class="btn btn-primary btn-lg">
                          </div>
                        </div>

                      </form>
                    </div>
                  </div>
                </div>
                <!--/.col-->
                <!--/.col-->
                <div class="col-sm-6">
                 
                  </div>
                </div>
                <!--/.col-->
              </div>

            </div>

          </div>
        </main>

      </div>

      <footer class="app-footer">
        <div>
          <span>&copy; 2022 Final Year project.</span>
        </div>
      </footer>
      <!-- Bootstrap and necessary plugins-->
      <script src="node_modules/jquery/dist/jquery.min.js"></script>
      <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
      <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="node_modules/pace-progress/pace.min.js"></script>
      <script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
      <script src="node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
    </body>
  </html>


