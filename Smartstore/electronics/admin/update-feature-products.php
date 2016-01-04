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
                <a   href="home.php"><i class="fa fa-key fa-3x"></i> Change Password</a>
              </li>  
              <li>
                <a  href="update-images.php"><i class="fa fa-edit fa-3x"></i> Update images</a>
              </li>  
              <li>
                <a href="update-sliders.php"><i class="fa fa-edit fa-3x"></i> Update slider images</a>
              </li>
              <li>
                <a class="active-menu" href="update-feature-products.php"><i class="fa fa-edit fa-3x"></i> Update Feature Products</a>
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
                <h1>Update Feature products</h1>   
              </div>
            </div>              
            <hr />
            <div class="row">
              <div class="col-md-3">
                <h4 class="text-center text-primary">Image 1</h4>
                <form id="featurePic1Form">
                  <div class="form-group">
                    <label for="file">Choose Image</label>
                    <input type="file" name="" class="form-control" id="featurePic1">
                  </div>
                  <div class="form-group">
                    <label for="featurePic1Heading">Heading</label>
                    <input type="text" name="featurePic1Heading" class="form-control" id="featurePic1Heading">
                  </div>
                  <div class="form-group">
                    <label for="featurePic1Description">Description</label>
                    <textarea name="featurePic1Description" rows="5" cols="10" class="form-control" id="featurePic1Description" placeholder="not more than 500 words!"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="featurePic1Mrp">MRP</label>
                    <input type="text" name="featurePic1Mrp" class="form-control" id="featurePic1Mrp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <label for="featurePic1Snp">SNP</label>
                    <input type="text" name="featurePic1Snp" class="form-control" id="featurePic1Snp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <a class="btn btn-primary" id="featurePic1UpdateBtn">Update</a>
                  </div>
                </form>
              </div>
              <div class="col-md-3">
                <h4 class="text-center text-primary">Image 2</h4>

                <form id="featurePic2Form">
                  <div class="form-group">
                    <label for="file">Choose Image</label>
                    <input type="file" name="" class="form-control" id="featurePic2">
                  </div>
                  <div class="form-group">
                    <label for="featurePic2Heading">Heading</label>
                    <input type="text" name="featurePic2Heading" class="form-control" id="featurePic2Heading">
                  </div>
                  <div class="form-group">
                    <label for="featurePic2Description">Description</label>
                    <textarea name="featurePic2Description" rows="5" cols="10" class="form-control" id="featurePic2Description" placeholder="not more than 500 words!"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="featurePic2Mrp">MRP</label>
                    <input type="text" name="featurePic2Mrp" class="form-control" id="featurePic2Mrp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <label for="featurePic2Snp">SNP</label>
                    <input type="text" name="featurePic2Snp" class="form-control" id="featurePic2Snp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <a class="btn btn-primary" id="featurePic2UpdateBtn">Update</a>
                  </div>
                </form>
              </div>
              <div class="col-md-3">
                <h4 class="text-center text-primary">Image 3</h4>

                <form id="featurePic3Form">
                  <div class="form-group">
                    <label for="file">Choose Image</label>
                    <input type="file" name="" class="form-control" id="featurePic3">
                  </div>
                  <div class="form-group">
                    <label for="featurePic3Heading">Heading</label>
                    <input type="text" name="featurePic3Heading" class="form-control" id="featurePic3Heading">
                  </div>
                  <div class="form-group">
                    <label for="featurePic3Description">Description</label>
                    <textarea name="featurePic3Description" rows="5" cols="10" class="form-control" id="featurePic3Description" placeholder="not more than 500 words!"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="featurePic3Mrp">MRP</label>
                    <input type="text" name="featurePic3Mrp" class="form-control" id="featurePic3Mrp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <label for="featurePic3Snp">SNP</label>
                    <input type="text" name="featurePic3Snp" class="form-control" id="featurePic3Snp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <a class="btn btn-primary" id="featurePic3UpdateBtn">Update</a>
                  </div>
                </form>
              </div>
              <div class="col-md-3">
                <h4 class="text-center text-primary">Image 4</h4>

                <form id="featurePic4Form">
                  <div class="form-group">
                    <label for="file">Choose Image</label>
                    <input type="file" name="" class="form-control" id="featurePic4">
                  </div>
                  <div class="form-group">
                    <label for="featurePic4Heading">Heading</label>
                    <input type="text" name="featurePic4Heading" class="form-control" id="featurePic4Heading">
                  </div>
                  <div class="form-group">
                    <label for="featurePic4Description">Description</label>
                    <textarea name="featurePic4Description" rows="5" cols="10" class="form-control" id="featurePic4Description" placeholder="not more than 500 words!"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="featurePic4Mrp">MRP</label>
                    <input type="text" name="featurePic4Mrp" class="form-control" id="featurePic4Mrp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <label for="featurePic4Snp">SNP</label>
                    <input type="text" name="featurePic4Snp" class="form-control" id="featurePic4Snp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <a class="btn btn-primary" id="featurePic4UpdateBtn">Update</a>
                  </div>
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
      <script src="js/update-feature-products.js"></script>


    </body>
    </html>
