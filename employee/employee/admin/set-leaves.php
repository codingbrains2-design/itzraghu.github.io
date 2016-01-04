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
                <div class="panel-group" id="accordion1">
                  <div class="panel panel-danger">
                    <div class="panel-heading">
                      <h3 class="panel-title">
                        <i class="fa fa-key"></i>
                        <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion1">
                         Leaves Taken
                       </a>
                     </h3>
                   </div>
                   <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <form id="leaveForm" class="form-horizontal" role="form">
                        <div class="form-group">
                          <div class="col-sm-3">
                            <label for="personal_id">Employee Id</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="text" id="personal_id" name="personal_id" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-3">
                            <label for="noOfLeaves">No. of Days</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="text" id="noOfLeaves" name="noOfLeaves" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-3">
                          </div>
                          <div class="col-sm-8">
                            <button type="button" id="setLeaveBtn" class="btn btn-default">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="panel panel-danger">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                      <i class="fa fa-key"></i>
                      <a href="#collapseFour" data-toggle="collapse" data-parent="#accordion1">
                       Set Leave Status
                     </a>
                   </h3>
                 </div>
                 <div id="collapseFour" class="panel-collapse collapse">
                  <div class="panel-body">
                    <form id="leaveStatusForm" class="form-horizontal" role="form">
                      <div class="form-group">
                        <div class="col-sm-3">
                          <label for="empLeave">Employee Id</label>
                        </div>
                        <div class="col-sm-8">
                          <input type="text" id="empLeave" name="empLeave" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-3">
                          <label for="empStatus">Status</label>
                        </div>
                        <div class="col-sm-8">
                          <input type="text" id="empStatus" name="empStatus" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-8">
                          <button type="button" id="leaveStatusBtn" class="btn btn-default">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="panel panel-danger">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <i class="fa fa-key"></i>
                    <a href="#collapseTwo" data-toggle="collapse" data-parent="#accordion1">
                      Set Total No. of Leaves
                    </a>
                  </h3>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body">
                    <form id="totalLeaveForm" class="form-horizontal" role="form">
                      <div class="form-group">
                        <div class="col-sm-3">
                          <label for="employee_id">Employee Id</label>
                        </div>
                        <div class="col-sm-8">
                          <input type="text" id="employee_id" name="employee_id" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-3">
                          <label for="no_of_days">No. of Days</label>
                        </div>
                        <div class="col-sm-8">
                          <input type="text" id="no_of_days" name="no_of_days" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-8">
                          <button type="button" id="totalLeaveBtn" class="btn btn-default">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="panel panel-danger">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <i class="fa fa-key"></i>
                    <a href="#collapseThree" data-toggle="collapse" data-parent="#accordion1">
                      See Leave Application
                    </a>
                  </h3>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    <!-- <form id="" class="form-horizontal" role="form"> -->
                    <div class="table-responsive">
                     <table id="leaveTable" class="table table-bordered table-hover">
                       <form class="form" role="form">
                        <div class="form-group">
                          <thead>
                            <tr>
                              <td ><label>S.No</label></td>
                              <td ><label>Employee Id</label></td>
                              <td ><label>Date From</label></td>
                              <td ><label>Date To</label></td>
                              <td ><label>Reason</label></td>
                              <td ><label>Action</label></td>
                            </tr>
                          </thead> 
                          <tbody>  
                          </tbody>  
                        </div>
                      </form>
                    </table>
                  </div>
                  <!-- </form> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <br><br>


  <footer>
    <p>Copyright &copy; 2015 <a href="http://zorrofoxtech.com/">zorrofox technologies pvt. ltd.</a></p>
  </footer>
</div>

<script src="../js/jquery-1.10.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- <script src="../js/bootstrap.min.js"></script> -->
<script src="js/set-leaves.js"></script>
<script src="js/leave-status.js"></script>
<script src="js/set-total-leaves.js"></script>
<script src="js/view-leave-application.js"></script>

</body>
</html>
