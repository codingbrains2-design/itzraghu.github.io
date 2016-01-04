<?php
session_start();
if (!isset($_SESSION['manager'])) {
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
                <a class="active-menu"  href="tutorRequest.php"><i class="fa fa-eye fa-3x"></i> Add Tutor</a>
              </li>
              <li>
                <a  href="leads.php"><i class="fa fa-key fa-3x"></i> Post Leads</a>
              </li>
            </ul>
          </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
          <div id="page-inner">
            <div class="row">
              <div class="col-md-12 text-center">
               <h1>Tutor's Request</h1>   
             </div>
           </div>              
           <hr />
           <section id="searchTutor">
             <div class="row">
               <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">Leads Form</h3>
                  </div>
                  <div class="panel-body">
                    <form id='#tutorReqForm' class='form'>
                      <br>
                      <div class='form-group'>
                        <label>Name</label>
                        <input id='name' class='form-control'>
                        <label>Email</label>
                        <input id='email' class='form-control'>
                        <label>Contact</label>
                        <input id='contact' type='text' class='form-control'>
                        <label>Gender</label>
                        <input id='gender' class='form-control'>
                        <label>Qualification</label>
                        <input id='qualification' type='text' class='form-control'>
                        <label>Preferred Location</label>
                        <input id='location' type='text' class='form-control'>
                        <label>Preferred Board</label>
                        <input id='board' type='text' class='form-control'>
                        <label>Preferred class</label>
                        <input id='class' type='text' class='form-control'>
                        <label>About Himself</label>
                        <textarea name='' id='about1' cols='30' rows='3' class='form-control'></textarea><br>
                        <button id='addTutorBtn' class='btn btn-primary'>Add Tutor</button></div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </section>
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
      <script src="js/tutor-request.js"></script>


    </body>
    </html>
