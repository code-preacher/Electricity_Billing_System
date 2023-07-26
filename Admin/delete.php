<?php session_start(); ?>
<?php if (isset($_SESSION['admin'])): ?>


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
        <a class="navbar-brand" href="#">
          ADMIN
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
                <a class="nav-link" href="view-user.php">
                  <i class="nav-icon icon-drop"></i>View Customer
                </a>
              </li>
         <li class="nav-item">
                <a class="nav-link" href="dst4.php">
                  <i class="nav-icon icon-drop"></i>Light Usage History
                </a>
              </li>
        
                       <li class="nav-item">
                <a class="nav-link" href="dst2.php">
                  <i class="nav-icon icon-pencil"></i> Recharge Cards
                </a>
              </li>
        <li class="nav-item">
                <a class="nav-link" href="dst3.php">
                  <i class="nav-icon icon-pencil"></i> Customer Recharge
                </a>
              </li>
        <li class="nav-item">
                <a class="nav-link" href="complian.php">
                  <i class="nav-icon icon-drop"></i>View Complain
                </a>
              </li>
        <li class="nav-item">
                <a class="nav-link" href="cpass.php">
                  <i class="nav-icon icon-drop"></i>Change Password
                </a>
              </li>
       
        <li class="nav-item">
                <a class="nav-link" href="delete.php">
                  <i class="nav-icon icon-drop"></i>Delete
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
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-header">
                      <strong>Delete Customer</strong>
                      <small>Form</small>
                    </div>
                    <div class="card-body">
                      <form  action="del.php" method="post">
                        						 <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label for="ccnumber">Customer Number</label>
                              <input type="number" name="no" class="form-control" id="dob" placeholder="Number"  required>
                            </div>
                          </div>
                        </div>
                        <!--/.row-->

                        <div class="row">
                          <div class="col-sm-12">
                            <input type="submit" name="dest" value="remove " class="btn btn-primary btn-lg">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
				 <div class="col-sm-6">
                  <div class="card">
                    <div class="card-header">
                      <strong>Delete Recharge card</strong>
                      <small>Form</small>
                    </div>
                    <div class="card-body">
                      <form  action="del.php" method="post">
                        						 <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label for="ccnumber">Recharge Number</label>
                              <input type="number" name="no" class="form-control" id="dob" placeholder="Number"  required>
                            </div>
                          </div>
                        </div>
                        <!--/.row-->

                        <div class="row">
                          <div class="col-sm-12">
                            <input type="submit" name="cest" value="remove " class="btn btn-primary btn-lg">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
			

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

<?php else:
  header("Location:logout.php");
  exit;
?>

<?php endif; ?>
