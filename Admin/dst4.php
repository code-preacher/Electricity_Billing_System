<?php session_start(); ?>
<?php 
  include './include/mysqldb.php';

  $q = $db->prepare("select mobile,duration,charge,ibalance,cbalance,date from light order by id desc");
  $q->execute();
  $q->store_result();
  $n = $q->num_rows;
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
	  	  <style>
	  #myInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 14px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
    border-collapse: collapse; /* Collapse borders */
    width: 100%; /* Full-width */
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 14px; /* Increase font-size */
}

#myTable th, #myTable td {
    text-align: left; /* Left-align text */
    padding: 10px; /* Add padding */
}

#myTable tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd; 
}

#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
}
	  </style>
	  <script>
	  function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
	  </script>
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
        <main class="main" style="padding-top:15px;">
          <!-- Breadcrumb-->

          <div class="container-fluid">
            <div class="animated fadeIn">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
				
                  <div class="card">
                    <div class="card-header">
                      <strong>Customer Light History &nbsp;&nbsp;(&nbsp;Total number of light history : &nbsp;<?php echo $n?>&nbsp;)</strong>
                      <small></small>
                    </div>
                    <div class="card-body">
                      <?php if ($n > 0):
                          $q->bind_result($cno,$d,$ch,$ib,$cb,$dt);
                          $c = 1;
                      ?>
                       
					   <div class="form-group">
                              <label for="ccnumber">Search for Meter Number</label>
                              <input type="text" id="myInput" onkeyup="myFunction()" class="form-control"  placeholder="Search for Meter Number"  required>
                            </div>
						 <table id="myTable" class="table  table-bordered">
  <tr class="header">
								   <th>Meter Number</th>
								      <th>Duration </th>
									  <th>Charge</th>
									  <th>Initial Balance</th>
									  <th>Current Balance</th>
									  <th>Date</th>
  </tr>
  <?php while ($q->fetch()): ?>
                              <tr>
								 <td> <?php echo $cno?> </td>
                                <td> <?php echo $d."&nbsp;sec"?> </td>
                            <td> <?php echo "₦".$ch ?> </td>
                            <td> <?php echo "₦".$ib ?> </td>   
                            <td> <?php echo  "₦".$cb ?> </td>  
                              <td> <?php echo $dt ?> </td>  							
														
                              </tr>

					
                           <?php endwhile; ?>
                         
                        </table>
                      <?php else: ?>
                        <h3>There are no customer record on this System at the moment.</h3>
                      <?php endif; $q->close(); $db->close(); ?>
                    </div>
                  </div>
                </div>
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

