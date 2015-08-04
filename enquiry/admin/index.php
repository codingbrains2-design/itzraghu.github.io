<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>EMS</title>
  <!-- Sets initial viewport load and disables zooming  -->
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- Latest compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/enquiry.css">
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>

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
        </div>
      </nav>


      <section id="admin-login" class="container login-panel">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h4 class="panel-title">Login here</h4>
              </div>
              <div class="panel-body">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <input type="text" id="username" placeholder="Username" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <input type="password" id="password" placeholder="Password" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button type="button" id="logBtn" class="btn btn-default">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>



      <footer>
        <p>Copyright &copy; 2015 <a href="http://zorrofoxtech.com/">zorrofox technologies pvt. ltd.</a></p>
      </footer>

      <script src="../js/jquery-1.10.1.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
      <script src="../js/bootstrap.min.js"></script>
      <script src="js/login.js"></script>
      <script src="js/session-check.js"></script>

    </body>
    </html>