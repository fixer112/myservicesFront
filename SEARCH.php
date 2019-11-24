<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.blue.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">DASH</strong><strong>BOARD</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
           <!-- Log out               -->
            <div class="list-inline-item logout">                   <a id="logout" href="login.html" class="nav-link">Logout <i class="icon-logout"></i></a></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p><strong>ID:</strong>1234</p>
            <p>Coin</p><strong>1,000.00</strong>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main User Section</span>
        <ul class="list-unstyled">
                <li><a href="index.php"> <i class="icon-home"></i>Home </a></li>
                <li><a href="BVNVER.php"> <i class="icon-grid"></i>Bvn Verification </a></li>
                <li><a href="EVENT.php"> <i class="fa fa-bar-chart"></i>Registration and Event </a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>SMS</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="SMSCOMP.php">Compose SMS</a></li>
                    <li><a href="SMSGROUP.php">Create SMS Group</a></li>
                    <li><a href="SMSSENT.php">Sms History</a></li>
                    <li><a href="SMSUPDATE.php">Update SMS Group</a></li>
                  </ul>
                </li>
                <li><a href="TRANS.php"> <i class="icon-logout"></i>Verify Transaction</a></li>
        </ul><span class="heading">Admin Section</span>
        <ul class="list-unstyled">
          <li> <a href="USER.php"> <i class="icon-settings"></i>create User</a></li>
          <li> <a href="UPDATE.php"> <i class="icon-writing-whiteboard"></i>Update User Profile</a></li>
          <li class="active"> <a href="SEARCH.php"> <i class="icon-chart"></i>Search User</a></li>
        </ul>
        </ul><span class="heading">Admin Section</span>
        <ul class="list-unstyled">
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      <!-- page content-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-user-1"></i></div><strong>Admin</strong>
                    </div>
                    <div class="number dashtext-1">27</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-contract"></i></div><strong>Staffs</strong>
                    </div>
                    <div class="number dashtext-2">37</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Users/Customer</strong>
                    </div>
                    <div class="number dashtext-3">140</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>Total Records</strong>
                    </div>
                    <div class="number dashtext-4">41</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>SEARCH USER/CUSTPMER</strong></div>
                  <div class="block-body">
                    <form class="form-horizontal">
                      </div>
                    <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Search Filter</label>
                        <div class="col-sm-9">
                          <select name="account" class="form-control mb-3 mb-3">
                            <option>All</option>
                            <option>Users</option>
                            <option>Admin</option>
                            <option>Customer</option>
                          </select>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Disabled</label>
                        <div class="col-sm-9">
                          <input type="text"  placeholder="please Enter Username or Phone Number" class="form-control">
                        </div>
                      </div>
                         
                      <section class="no-padding-top">
                    <div class="container-fluid">
                        <div class="">
                        <div class="">
                            <div class="block margin-bottom-sm">
                    <div class=""> 
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#Reff</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Phone Number</th>
                          <th>User ID</th>
                          <th>Coin Balance</th>
                          <th>Address</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                         
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
               </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end page content-->
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p>2019&copy; Ahmed Tech Intergrated Services <a target="_blank" href="https://ahmedtech.com.ng"></a>.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>