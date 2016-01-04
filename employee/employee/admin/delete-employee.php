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
              <a class="navbar-brand" href="index.php">Employee Management System</a>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a class="nav-link" href="home.php"><i class="fa fa-home"></i> Home</a></li>
                <li><a class="nav-link" href="php/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="container">
          <section>
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="example">
                  <div class="panel panel-danger">
                    <div class="panel-heading">
                      <h3 class="panel-title">Delete Employee</h3>
                    </div>
                    <div class="panel-body">
                      <form class="form-horizontal" role="form">
                        <div class="form-group">
                          <div class="col-sm-3">
                            <label for="empId">Personal Id</label>
                          </div>
                          <div class="col-sm-8">
                            <select id="empId" name="empId" class="form-control">
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-3">
                          </div>
                          <div class="col-sm-8">
                            <button type="button" id="deleteEmpBtn" class="btn btn-default">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>


        <footer>
          <p>Copyright &copy; 2015 <a href="http://zorrofoxtech.com/">zorrofox technologies pvt. ltd.</a></p>
        </footer>
      </div>

      <script src="../js/jquery-1.10.1.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="js/delete-employee.js"></script>
      <script src="js/employee-list.js"></script>

    </body>
    </html>
