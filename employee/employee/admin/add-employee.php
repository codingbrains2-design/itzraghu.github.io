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
  <link rel="stylesheet" href="../css/sweetalert.css">

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
                      <h3 class="panel-title">Add Employee Details </h3>
                    </div>
                    <div class="panel-body">
                      <form id="addEmployee" class="form-horizontal" role="form">
                        <div class="form-group">
                          <div class="col-sm-3">
                            <label for="">Personal Id</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="text" id="personal_id" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-3">
                            <label for="">Password</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="password" id="password" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-3">
                            <label for="">First Name</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="text" id="first_name" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-3">
                            <label for="">Last Name</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="text" id="last_name" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-3">
                            <label for="">Date of birth</label>
                          </div>
                          <div class="col-sm-8"> 
                            <input type="date" id="date_of_birth" placeholder="Your email" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-3">
                            <label for="">Gender</label>
                          </div>
                          <div class="col-sm-8">
                            <div class="form-inline checkbox">
                              <label><input type="radio" id="rb1" name="optionradio" value="Male" checked> Male</label>
                              <label><input type="radio" id="rb2" name="optionradio" value="Female"> Female</label>
                              <label><input type="radio" id="rb3" name="optionradio" value="Other"> Other</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-3">
                            <label for="">Qualification</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="text" id="qualification" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-3">
                            <label for="">Date of joining</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="date" id="date_of_joining" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-3">
                            <label for="">Designation</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="text" id="designation" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-3">
                          </div>
                          <div class="col-sm-8">
                            <button type="button" id="addBtn" class="btn btn-default">Submit</button>
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
        <br><br><br>


        <footer>
          <p>Copyright &copy; 2015 <a href="http://zorrofoxtech.com/">zorrofox technologies pvt. ltd.</a></p>
        </footer>
      </div>

      <script src="../js/jquery-1.10.1.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <!-- <script src="../js/bootstrap.min.js"></script> -->
      <script src="js/add-employee.js"></script>
      <script src="../js/sweetalert.min.js"></script>


    </body>
    </html>
