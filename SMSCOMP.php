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
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
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
                <li class="active"><a href="index.php"> <i class="icon-home"></i>Home </a></li>
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
          <li> <a href="SEARCH.php"> <i class="icon-chart"></i>Search User</a></li>
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
            <h2 class="h5 no-margin-bottom">Compose SMS</h2>
          </div>
        </div>
        
<!-- Form Elements -->
<div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Compose SMS</strong></div>
                  <div class="block-body">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Sender ID</label>
                        <div class="col-sm-9">
                          <input type="text" placeholder="User id" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Recivers Phone Number</label>
                        <div class="col-sm-9">
                          <textarea type="text" placeholder="Enter phone numbers separated by comma, space, or semicolon in any of these formats e.g 7037770033, 07037770033, "  class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Send to Group</label>
                        <div class="col-sm-9">
                          <select name="account"  placeholder="Select Group" class="form-control mb-3 mb-3">
                            <option>my family</option>
                            <option>my office</option>
                            <option>my school</option>
                            <option>my friends</option>
                          </select>
                        </div>
                      </div>
                      <div class="
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Message Content</label>
                        <div class="col-sm-9">
                          <textarea id="letter" onkeyup="count();" rows="10"  placeholder="Type/compose your message here in this box" class="form-control"></textarea>
                          <span id="Countletter">0</span><p>
                          <span id="page">0</span><p>
                        </div>
                      </div>
                        </div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                      </div>
                    </form>
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

<script type="text/javascript">
function count()
{
  var total=document.getElementById("letter").value;
  total=total.replace(/\s/g, '');
  document.getElementById("Countletter").innerHTML="Total Characters:"+total.length;
  document.getElementById("page").innerHTML="Pages:"+total.length/160;
}
</script>


</html>