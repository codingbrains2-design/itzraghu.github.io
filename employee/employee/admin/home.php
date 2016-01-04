<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Employee Management System</title>
  <!-- Sets initial viewport load and disables zooming  -->
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/ems.css">
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>

      <div id="wrapper">
        <!--nav-->
        <nav class="navbar navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Enquiry Management System</a>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a class="nav-link" href="php/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <section id="admin-panel">
          <div class="container">
            <div class="admin-panel example">
              <div class="row">
                <div class="col-md-4">
                  <a href="change-password.php">
                    <div class="thumbnail">
                      <div class="caption text-center">
                        <span class="fa-stack fa-5x">
                          <i class="fa fa-square-o fa-stack-2x"></i>
                          <i class="fa fa-key fa-stack-1x"></i>
                        </span>
                        <h4>Change Password</h4>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="add-employee.php">
                    <div class="thumbnail">                
                      <div class="caption text-center">
                        <span class="fa-stack fa-5x">
                          <i class="fa fa-square-o fa-stack-2x"></i>
                          <i class="fa fa-plus fa-stack-1x"></i>
                        </span>
                        <h4>Add Employee</h4>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="delete-employee.php">
                    <div class="thumbnail">                
                      <div class="caption text-center">
                        <span class="fa-stack fa-5x">
                          <i class="fa fa-square-o fa-stack-2x"></i>
                          <i class="fa fa-times fa-stack-1x"></i>
                        </span>
                        <h4>Delete Employee</h4>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <a href="view-employees.php">
                    <div class="thumbnail">                
                      <div class="caption text-center">
                        <span class="fa-stack fa-5x">
                          <i class="fa fa-square-o fa-stack-2x"></i>
                          <i class="fa fa-users fa-stack-1x"></i>
                        </span>
                        <h4>View Emp Details</h4>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="view-applicants.php">
                    <div class="thumbnail">                
                      <div class="caption text-center">
                        <span class="fa-stack fa-5x">
                          <i class="fa fa-square-o fa-stack-2x"></i>
                          <i class="fa fa-eye fa-stack-1x"></i>
                        </span>
                        <h4>View Applicant</h4>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="message.php">
                    <div class="thumbnail">                
                      <div class="caption text-center">
                        <span class="fa-stack fa-5x">
                          <i class="fa fa-square-o fa-stack-2x"></i>
                          <i class="fa fa-comment-o fa-stack-1x"></i>
                        </span>
                        <h4>Send Message</h4>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <a href="set-working-hour.php">
                    <div class="thumbnail">                
                      <div class="caption text-center">
                        <span class="fa-stack fa-5x">
                          <i class="fa fa-square-o fa-stack-2x"></i>
                          <i class="fa fa-clock-o fa-stack-1x"></i>
                        </span>
                        <h4>Set Working Hour</h4>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="set-leaves.php">
                    <div class="thumbnail">                
                      <div class="caption text-center">
                        <span class="fa-stack fa-5x">
                          <i class="fa fa-square-o fa-stack-2x"></i>
                          <i class="fa fa-stethoscope fa-stack-1x"></i>
                        </span>
                        <h4>Leaves</h4>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="see-attendance.php">
                    <div class="thumbnail">                
                      <div class="caption text-center">
                        <span class="fa-stack fa-5x">
                          <i class="fa fa-square-o fa-stack-2x"></i>
                          <i class="fa fa-book fa-stack-1x"></i>
                        </span>
                        <h4>Attendance</h4>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <br><br><br>

        <footer>
          <p>Copyright &copy; 2015 <a href="http://zorrofoxtech.com/">zorrofox technologies pvt. ltd.</a></p>
        </footer>
      </div>

      <script src="../js/jquery-1.10.1.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>

    </body>
    </html>