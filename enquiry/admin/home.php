<?php
session_start();
if(!isset($_SESSION['admin']))
{

	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>EMS</title>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/enquiry.css">
	
</head>
<body>

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


	<section id="admin-login" class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="panel-group" id="accordion">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
									<i class="fa fa-key"></i> Change Password
								</a>  
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in">
							<div class="panel-body">
								<form id="change-pass-form" class="form-horizontal" role="form">
									<div class="form-group">
										<div class="col-sm-12">
											<input type="password" id="oldPassword" placeholder="Old Password" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<input type="password" id="newPassword" placeholder="New Password" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<input type="password" id="confirmPassword" placeholder="Confirm Password" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<button type="button" id="changePassBtn" class="btn btn-info pull-left">Submit</button>
											<button type="reset" class="btn btn-info pull-right">Reset</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="panel-title">
								<i class="fa fa-times"></i>
								<a href="#collapseTwo" data-toggle="collapse" data-parent="#accordion">
									Delete Client
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse">
							<div class="panel-body">
								<form id="change-pass-form" class="form-horizontal" role="form">
									<div class="form-group">
										<div class="col-sm-12">
											<input type="text" id="deleteClientName" placeholder="Client Username" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<button type="button" id="deleteClientBtn" class="btn btn-info pull-left">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="panel-title">
								<i class="fa fa-search"></i>
								<a href="search.php">
									See all Client
								</a>
							</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 class="panel-title"><i class="fa fa-book"></i> Set Username &amp; Password for Client</h4>
					</div>
					<div class="panel-body">
						<form id="enquiry-form" class="form-horizontal" role="form">
							<div class="form-group">
								<div class="col-sm-3">
									<label for="">Client Name:- </label>
								</div>
								<div class="col-sm-9">
									<input type="text" id="" name="" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-3">
									<label for="">Username:- </label>
								</div>
								<div class="col-sm-9">
									<input type="text" id="" name="" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-3">
									<label for="">Password:- </label>
								</div>
								<div class="col-sm-9">
									<input type="text" id="" name="" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-3">
								</div>
								<div class="col-sm-9">
									<button type="button" id="submit" class="btn btn-primary">Create</button>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<button type="reset" class="btn btn-primary">Reset</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 class="panel-title"><i class="fa fa-book"></i> Create Table</h4>
					</div>
					<div class="panel-body">
						<form id="enquiry-form" class="form-horizontal" role="form">
							<div class="form-group">
								<div class="col-sm-3">
									<label for="clientName">Client Name:- </label>
								</div>
								<div class="col-sm-9">
									<input type="text" id="clientName" name="clientName" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-3">
								</div>
								<div class="col-sm-9">
									<button type="button" id="createTableBtn" class="btn btn-primary">Create</button>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<button type="reset" class="btn btn-primary">Reset</button>
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
	<script src="../js/bootstrap.min.js"></script>
	<script src="js/change-password.js"></script>
	<script src="js/create-table.js"></script>
	<script src="js/delete-client.js"></script>

</body>
</html>