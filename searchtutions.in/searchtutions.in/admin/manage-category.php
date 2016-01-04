<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header('Location: 404.html');
}
?>
<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>SearchTutions.in</title>

  <link rel="shortcut icon" href="favicon.png">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/sweetalert.css">

  <script type="text/javascript" src="../js/modernizr.custom.32033.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">SearchTutions.in</a> 
          </div>
          <div style="color: white;
          padding: 10px 50px 5px 50px;
          float: right;
          font-size: 25px;"><label id="lastLoginTime" class="label label-primary">Last access : </label> &nbsp; <a href="php/logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
          <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
              <li class="text-center">
                <img src="../img/find_user.png" class="user-image img-responsive"/>
              </li>
              <li>
                <a  href="home.php"><i class="fa fa-key fa-3x"></i> Change Password</a>
              </li>
              <li>
                <a  href="manage-tutor.php"><i class="fa fa-users fa-3x"></i> Manage Tutors</a>
              </li>
              <li>
                <a class="active-menu"  href="manage-category.php"><i class="fa fa-pencil-square-o fa-3x"></i> Manage Tutor's Category</a>
              </li>
              <li>
                <a  href="tutorRequest.php"><i class="fa fa-eye fa-3x"></i> View Tutor Request</a>
              </li>
              <li>
                <a  href="leads.php"><i class="fa fa-folder-open-o fa-3x"></i> View Leads</a>
              </li>
              <li>
                <a href="manage-jobs.php"><i class="fa fa-pencil-square-o fa-3x"></i> Manage Jobs</a>
              </li>
            </ul>
          </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
          <div id="page-inner">
            <div class="row text-center">
              <div class="col-md-6 category1">
               <h2>Manage Category</h2>   
               <h5>Select tutor's email and category for managing category.</h5>
               <hr>
               <br>
               <div class="panel panel-danger">
                <div class="panel-heading">
                  <div class="panel-title">
                    Manage Category
                  </div>
                </div>
                <div class="panel-body">
                  <form id="change-pass-form" class="form-horizontal" role="form">
                    <div class="form-group">
                      <div class="col-sm-4">
                        <label for="tutorList1">Select Email</label>
                      </div>
                      <div class="col-sm-8">
                        <select name="tutorList1" class="tutorList1 form-control">

                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-4">
                        <label for="tutorCategory">Choose Category</label>
                      </div>
                      <div class="col-sm-8">
                        <select id="tutorCategory" name="tutorCategory" class="form-control">
                          <option value="">Diamond</option>
                          <option value="">Gold</option>
                          <option value="">Premium</option>
                          <option value="">Silver</option>
                          <option value="">Super Premium</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-4">
                      </div>
                      <div class="col-sm-8">
                        <button type="button" id="updateCategoryBtn" class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 category">
             <h2>Generate Password</h2>   
             <h5>Select Tutor's email and set password.</h5>
             <hr>
             <br>
             <div class="panel panel-success">
              <div class="panel-heading">
                <div class="panel-title">
                  Set Password
                </div>
              </div>
              <div class="panel-body">
                <form id="change-pass-form" class="form-horizontal" role="form">
                  <div class="form-group">
                    <div class="col-sm-4">
                      <label for="tutorList2">Select Email</label>
                    </div>
                    <div class="col-sm-8">
                      <select name="tutorList2" class="tutorList2 form-control">

                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-4">
                      <label for="tutorPassword">Password</label>
                    </div>
                    <div class="col-sm-8">
                      <input id="tutorPassword" name="tutorPassword" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-8">
                      <button type="button" id="createPassBtn" class="btn btn-primary">Create</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>              
        <hr />
      </div>
      <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
  </div>
  <!-- /. WRAPPER  -->


  <script src="../js/jquery-1.11.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/custom.js"></script>
  <script src="../js/jquery.metisMenu.js"></script>
  <script src="../js/sweetalert.min.js"></script>
  <script src="js/tutor-list.js"></script>
  <script src="js/manage-category.js"></script>
  <script src="js/create-password.js"></script>

</body>
</html>
