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
                <a  href="home.php"><i class="fa fa-key fa-3x"></i> Change Password</a>
              </li>  
              <li>
                <a  href="update-images.php"><i class="fa fa-edit fa-3x"></i> Update images</a>
              </li>  
              <li>
                <a href="update-sliders.php"><i class="fa fa-edit fa-3x"></i> Update slider images</a>
              </li>
              <li>
                <a href="update-feature-products.php"><i class="fa fa-edit fa-3x"></i> Update Feature Products</a>
              </li>
              <li>
                <a class="active-menu" href="update-new-products.php"><i class="fa fa-edit fa-3x"></i> Update New Products</a>
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
                <h1>Update New Products</h1>   
              </div>
            </div>              
            <hr />
            <div class="row">
              <div class="col-md-3">
                <h4 class="text-center text-primary">Image 1</h4>
                <form id="newPic1Form">
                  <div class="form-group">
                    <label for="file">Choose Image</label>
                    <input type="file" name="" class="form-control" id="newPic1">
                  </div>
                  <div class="form-group">
                    <label for="newPic1Heading">Heading</label>
                    <input type="text" name="newPic1Heading" class="form-control" id="newPic1Heading">
                  </div>
                  <div class="form-group">
                    <label for="newPic1Description">Description</label>
                    <textarea name="newPic1Description" rows="5" cols="10" class="form-control" id="newPic1Description" placeholder="not more than 500 words!"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="newPic1Mrp">MRP</label>
                    <input type="text" name="newPic1Mrp" class="form-control" id="newPic1Mrp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <label for="newPic1Snp">SNP</label>
                    <input type="text" name="newPic1Snp" class="form-control" id="newPic1Snp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <a class="btn btn-primary" id="newPic1UpdateBtn">Update</a>
                  </div>
                </form>
              </div>
              <div class="col-md-3">
                <h4 class="text-center text-primary">Image 2</h4>

                <form id="newPic2Form">
                  <div class="form-group">
                    <label for="file">Choose Image</label>
                    <input type="file" name="" class="form-control" id="newPic2">
                  </div>
                  <div class="form-group">
                    <label for="newPic2Heading">Heading</label>
                    <input type="text" name="newPic2Heading" class="form-control" id="newPic2Heading">
                  </div>
                  <div class="form-group">
                    <label for="newPic2Description">Description</label>
                    <textarea name="newPic2Description" rows="5" cols="10" class="form-control" id="newPic2Description" placeholder="not more than 500 words!"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="newPic2Mrp">MRP</label>
                    <input type="text" name="newPic2Mrp" class="form-control" id="newPic2Mrp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <label for="newPic2Snp">SNP</label>
                    <input type="text" name="newPic2Snp" class="form-control" id="newPic2Snp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <a class="btn btn-primary" id="newPic2UpdateBtn">Update</a>
                  </div>
                </form>
              </div>
              <div class="col-md-3">
                <h4 class="text-center text-primary">Image 3</h4>

                <form id="newPic3Form">
                  <div class="form-group">
                    <label for="file">Choose Image</label>
                    <input type="file" name="" class="form-control" id="newPic3">
                  </div>
                  <div class="form-group">
                    <label for="newPic3Heading">Heading</label>
                    <input type="text" name="newPic3Heading" class="form-control" id="newPic3Heading">
                  </div>
                  <div class="form-group">
                    <label for="newPic3Description">Description</label>
                    <textarea name="newPic3Description" rows="5" cols="10" class="form-control" id="newPic3Description" placeholder="not more than 500 words!"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="newPic3Mrp">MRP</label>
                    <input type="text" name="newPic3Mrp" class="form-control" id="newPic3Mrp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <label for="newPic3Snp">SNP</label>
                    <input type="text" name="newPic3Snp" class="form-control" id="newPic3Snp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <a class="btn btn-primary" id="newPic3UpdateBtn">Update</a>
                  </div>
                </form>
              </div>
              <div class="col-md-3">
                <h4 class="text-center text-primary">Image 4</h4>

                <form id="newPic4Form">
                  <div class="form-group">
                    <label for="file">Choose Image</label>
                    <input type="file" name="" class="form-control" id="newPic4">
                  </div>
                  <div class="form-group">
                    <label for="newPic4Heading">Heading</label>
                    <input type="text" name="newPic4Heading" class="form-control" id="newPic4Heading">
                  </div>
                  <div class="form-group">
                    <label for="newPic4Description">Description</label>
                    <textarea name="newPic4Description" rows="5" cols="10" class="form-control" id="newPic4Description" placeholder="not more than 500 words!"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="newPic4Mrp">MRP</label>
                    <input type="text" name="newPic4Mrp" class="form-control" id="newPic4Mrp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <label for="newPic4Snp">SNP</label>
                    <input type="text" name="newPic4Snp" class="form-control" id="newPic4Snp"><span>(in Rs.)</span>
                  </div>
                  <div class="form-group">
                    <a class="btn btn-primary" id="newPic4UpdateBtn">Update</a>
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
      <script src="js/update-new-products.js"></script>


    </body>
    </html>
