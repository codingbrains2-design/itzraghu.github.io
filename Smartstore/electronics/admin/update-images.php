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
          font-size: 25px;"> &nbsp; <a href="php/logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
          <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
              <li class="text-center">
                <img src="../images/find_user.png" class="user-image img-responsive"/>
              </li>
              <li>
                <a href="home.php"><i class="fa fa-key fa-3x"></i> Change Password</a>
              </li>  
              <li>
                <a class="active-menu" href="update-images.php"><i class="fa fa-edit fa-3x"></i> Update images</a>
              </li>  
              <li>
                <a href="update-sliders.php"><i class="fa fa-edit fa-3x"></i> Update slider images</a>
              </li>
              <li>
                <a href="update-feature-products.php"><i class="fa fa-edit fa-3x"></i> Update Feature Products</a>
              </li>
              <li>
                <a href="update-new-products.php"><i class="fa fa-edit fa-3x"></i> Update New Products</a>
              </li>
              <li>
                <a href="update-products.php"><i class="fa fa-edit fa-3x"></i> Update Products</a>
              </li>
              
            </ul>
          </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
          <div id="page-inner">
            <div class="row">
              <div class="col-md-12 text-center">
                <h1>Update Index</h1>   
              </div>
            </div>              
            <hr />
            <div class="row">
              <div class="col-md-3">
                <h4 class="text-center text-primary">Image 1</h4>
                <form id="pic1Form">
                  <div class="form-group">
                    <label for="file">Choose Image</label>
                    <input type="file" name="" class="form-control" id="pic1">
                  </div>
                  <div class="form-group">
                    <label for="pic1Heading">Heading</label>
                    <input type="text" name="pic1Heading" class="form-control" id="pic1Heading">
                  </div>
                  <div class="form-group">
                    <label for="pic1Description">Description</label>
                    <textarea name="pic1Description" rows="5" cols="10" class="form-control" id="pic1Description" placeholder="not more than 500 words!"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="pic1Mrp">MRP</label>
                    <input type="text" name="pic1Mrp" class="form-control" id="pic1Mrp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <label for="pic1Snp">SNP</label>
                    <input type="text" name="pic1Snp" class="form-control" id="pic1Snp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <a class="btn btn-primary" id="pic1UpdateBtn">Update</a>
                  </div>
                </form>
              </div>
              <div class="col-md-3">
                <h4 class="text-center text-primary">Image 2</h4>

                <form>
                  <div class="form-group">
                    <label for="file">Choose Image</label>
                    <input type="file" name="" class="form-control" id="pic2">
                  </div>
                  <div class="form-group">
                    <label for="pic2Heading">Heading</label>
                    <input type="text" name="pic2Heading" class="form-control" id="pic2Heading">
                  </div>
                  <div class="form-group">
                    <label for="pic2Description">Description</label>
                    <textarea name="pic2Description" rows="5" cols="10" class="form-control" id="pic2Description" placeholder="not more than 500 words!"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="pic2Mrp">MRP</label>
                    <input type="text" name="pic2Mrp" class="form-control" id="pic2Mrp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <label for="pic2Snp">SNP</label>
                    <input type="text" name="pic2Snp" class="form-control" id="pic2Snp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <a class="btn btn-primary" id="pic2UpdateBtn">Update</a>
                  </div>
                </form>
              </div>
              <div class="col-md-3">
                <h4 class="text-center text-primary">Image 3</h4>

                <form id="pic3Form">
                  <div class="form-group">
                    <label for="file">Choose Image</label>
                    <input type="file" name="" class="form-control" id="pic3">
                  </div>
                  <div class="form-group">
                    <label for="pic3Heading">Heading</label>
                    <input type="text" name="pic3Heading" class="form-control" id="pic3Heading">
                  </div>
                  <div class="form-group">
                    <label for="pic3Description">Description</label>
                    <textarea name="pic3Description" rows="5" cols="10" class="form-control" id="pic3Description" placeholder="not more than 500 words!"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="pic3Mrp">MRP</label>
                    <input type="text" name="pic3Mrp" class="form-control" id="pic3Mrp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <label for="pic3Snp">SNP</label>
                    <input type="text" name="pic3Snp" class="form-control" id="pic3Snp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <a class="btn btn-primary" id="pic3UpdateBtn">Update</a>
                  </div>
                </form>
              </div>
              <div class="col-md-3">
                <h4 class="text-center text-primary">Image 4</h4>

                <form id="pic4Form">
                  <div class="form-group">
                    <label for="file">Choose Image</label>
                    <input type="file" name="" class="form-control" id="pic4">
                  </div>
                  <div class="form-group">
                    <label for="pic4Heading">Heading</label>
                    <input type="text" name="pic4Heading" class="form-control" id="pic4Heading">
                  </div>
                  <div class="form-group">
                    <label for="pic4Description">Description</label>
                    <textarea name="pic4Description" rows="5" cols="10" class="form-control" id="pic4Description" placeholder="not more than 500 words!"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="pic4Mrp">MRP</label>
                    <input type="text" name="pic4Mrp" class="form-control" id="pic4Mrp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <label for="pic4Snp">SNP</label>
                    <input type="text" name="pic4Snp" class="form-control" id="pic4Snp"><span>(in Rs.)</span>
                  </div>
                  <a class="btn btn-primary" id="pic4UpdateBtn">Update</a>

                </form>
              </div>

            </div>
          </div>

          <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
      </div>
      <!-- /. WRAPPER  -->


      <script src="../js/jquery.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/sweetalert.min.js"></script>
      <script src="js/update-images.js"></script>


    </body>
    </html>
