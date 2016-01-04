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
                <a class="active-menu" href="mobile.php"><i class="fa fa-edit fa-3x"></i> Update mobile products</a>
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
                <h1>Update Mobile Products</h1>   
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

                <form id="pic2Form">
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
            <div class="row">
             <div class="col-md-3">
               <h4 class="text-center text-primary">Image 5</h4>

               <form id="pic5Form">
                <div class="form-group">
                  <label for="file">Choose Image</label>
                  <input type="file" name="" class="form-control" id="pic5">
                </div>
                <div class="form-group">
                  <label for="pic5Heading">Heading</label>
                  <input type="text" name="pic5Heading" class="form-control" id="pic5Heading">
                </div>
                <div class="form-group">
                  <label for="pic5Description">Description</label>
                  <textarea name="pic5Description" rows="5" cols="10" class="form-control" id="pic5Description" placeholder="not more than 500 words!"></textarea>
                </div>
                <div class="form-group">
                  <label for="pic5Mrp">MRP</label>
                  <input type="text" name="pic5Mrp" class="form-control" id="pic5Mrp"><span>(in Rs.)</span>
                </div>
                <div class="form-group">
                  <label for="pic5Snp">SNP</label>
                  <input type="text" name="pic5Snp" class="form-control" id="pic5Snp"><span>(in Rs.)</span>
                </div>
                <a class="btn btn-primary" id="pic5UpdateBtn">Update</a>

              </form>
            </div>

            <div class="col-md-3">
              <h4 class="text-center text-primary">Image 6</h4>

              <form id="pic6Form">
                <div class="form-group">
                  <label for="file">Choose Image</label>
                  <input type="file" name="" class="form-control" id="pic6">
                </div>
                <div class="form-group">
                  <label for="pic6Heading">Heading</label>
                  <input type="text" name="pic6Heading" class="form-control" id="pic6Heading">
                </div>
                <div class="form-group">
                  <label for="pic6Description">Description</label>
                  <textarea name="pic6Description" rows="5" cols="10" class="form-control" id="pic6Description" placeholder="not more than 500 words!"></textarea>
                </div>
                <div class="form-group">
                  <label for="pic6Mrp">MRP</label>
                  <input type="text" name="pic6Mrp" class="form-control" id="pic6Mrp"><span>(in Rs.)</span>
                </div>
                <div class="form-group">
                  <label for="pic6Snp">SNP</label>
                  <input type="text" name="pic6Snp" class="form-control" id="pic6Snp"><span>(in Rs.)</span>
                </div>
                <div class="form-group">
                  <a class="btn btn-primary" id="pic6UpdateBtn">Update</a>
                </div>
              </form>
            </div>
            <div class="col-md-3">
              <h4 class="text-center text-primary">Image 7</h4>

              <form id="pic7Form">
                <div class="form-group">
                  <label for="file">Choose Image</label>
                  <input type="file" name="" class="form-control" id="pic7">
                </div>
                <div class="form-group">
                  <label for="pic7Heading">Heading</label>
                  <input type="text" name="pic7Heading" class="form-control" id="pic7Heading">
                </div>
                <div class="form-group">
                  <label for="pic7Description">Description</label>
                  <textarea name="pic7Description" rows="5" cols="10" class="form-control" id="pic7Description" placeholder="not more than 500 words!"></textarea>
                </div>
                <div class="form-group">
                  <label for="pic7Mrp">MRP</label>
                  <input type="text" name="pic7Mrp" class="form-control" id="pic7Mrp"><span>(in Rs.)</span>
                </div>
                <div class="form-group">
                  <label for="pic7Snp">SNP</label>
                  <input type="text" name="pic7Snp" class="form-control" id="pic7Snp"><span>(in Rs.)</span>
                </div>
                <div class="form-group">
                  <a class="btn btn-primary" id="pic7UpdateBtn">Update</a>
                </div>
              </form>
            </div>
            <div class="col-md-3">
              <h4 class="text-center text-primary">Image 8</h4>

              <form id="pic8Form">
                <div class="form-group">
                  <label for="file">Choose Image</label>
                  <input type="file" name="" class="form-control" id="pic8">
                </div>
                <div class="form-group">
                  <label for="pic8Heading">Heading</label>
                  <input type="text" name="pic8Heading" class="form-control" id="pic8Heading">
                </div>
                <div class="form-group">
                  <label for="pic8Description">Description</label>
                  <textarea name="pic8Description" rows="5" cols="10" class="form-control" id="pic8Description" placeholder="not more than 500 words!"></textarea>
                </div>
                <div class="form-group">
                  <label for="pic8Mrp">MRP</label>
                  <input type="text" name="pic8Mrp" class="form-control" id="pic8Mrp"><span>(in Rs.)</span>
                </div>
                <div class="form-group">
                  <label for="pic8Snp">SNP</label>
                  <input type="text" name="pic8Snp" class="form-control" id="pic8Snp"><span>(in Rs.)</span>
                </div>
                <a class="btn btn-primary" id="pic8UpdateBtn">Update</a>

              </form>
            </div>

          </div>
          <div class="row">
            <div class="col-md-3">
              <h4 class="text-center text-primary">Image 9</h4>
              <form id="pic9Form">
                <div class="form-group">
                  <label for="file">Choose Image</label>
                  <input type="file" name="" class="form-control" id="pic9">
                </div>
                <div class="form-group">
                  <label for="pic9Heading">Heading</label>
                  <input type="text" name="pic9Heading" class="form-control" id="pic9Heading">
                </div>
                <div class="form-group">
                  <label for="pic9Description">Description</label>
                  <textarea name="pic9Description" rows="5" cols="10" class="form-control" id="pic9Description" placeholder="not more than 500 words!"></textarea>
                </div>
                <div class="form-group">
                  <label for="pic9Mrp">MRP</label>
                  <input type="text" name="pic9Mrp" class="form-control" id="pic9Mrp"><span>(in Rs.)</span>
                </div>
                <div class="form-group">
                  <label for="pic9Snp">SNP</label>
                  <input type="text" name="pic9Snp" class="form-control" id="pic9Snp"><span>(in Rs.)</span>
                </div>
                <div class="form-group">
                  <a class="btn btn-primary" id="pic9UpdateBtn">Update</a>
                </div>
              </form>
            </div>
            <div class="col-md-3">
              <h4 class="text-center text-primary">Image 10</h4>

              <form id="pic10Form">
                <div class="form-group">
                  <label for="file">Choose Image</label>
                  <input type="file" name="" class="form-control" id="pic10">
                </div>
                <div class="form-group">
                  <label for="pic10Heading">Heading</label>
                  <input type="text" name="pic10Heading" class="form-control" id="pic10Heading">
                </div>
                <div class="form-group">
                  <label for="pic10Description">Description</label>
                  <textarea name="pic10Description" rows="5" cols="10" class="form-control" id="pic10Description" placeholder="not more than 500 words!"></textarea>
                </div>
                <div class="form-group">
                  <label for="pic10Mrp">MRP</label>
                  <input type="text" name="pic10Mrp" class="form-control" id="pic10Mrp"><span>(in Rs.)</span>
                </div>
                <div class="form-group">
                  <label for="pic10Snp">SNP</label>
                  <input type="text" name="pic10Snp" class="form-control" id="pic10Snp"><span>(in Rs.)</span>
                </div>
                <div class="form-group">
                  <a class="btn btn-primary" id="pic10UpdateBtn">Update</a>
                </div>
              </form>
            </div>
            <div class="col-md-3">
              <h4 class="text-center text-primary">Image 11</h4>

              <form id="pic11Form">
                <div class="form-group">
                  <label for="file">Choose Image</label>
                  <input type="file" name="" class="form-control" id="pic11">
                </div>
                <div class="form-group">
                  <label for="pic11Heading">Heading</label>
                  <input type="text" name="pic11Heading" class="form-control" id="pic11Heading">
                </div>
                <div class="form-group">
                  <label for="pic11Description">Description</label>
                  <textarea name="pic11Description" rows="5" cols="10" class="form-control" id="pic11Description" placeholder="not more than 500 words!"></textarea>
                </div>
                <div class="form-group">
                  <label for="pic11Mrp">MRP</label>
                  <input type="text" name="pic11Mrp" class="form-control" id="pic11Mrp"><span>(in Rs.)</span>
                </div>
                <div class="form-group">
                  <label for="pic11Snp">SNP</label>
                  <input type="text" name="pic11Snp" class="form-control" id="pic11Snp"><span>(in Rs.)</span>
                </div>
                <div class="form-group">
                  <a class="btn btn-primary" id="pic11UpdateBtn">Update</a>
                </div>
              </form>
            </div>
            <div class="col-md-3">
              <h4 class="text-center text-primary">Image 12</h4>

              <form id="pic12Form">
                <div class="form-group">
                  <label for="file">Choose Image</label>
                  <input type="file" name="" class="form-control" id="pic12">
                </div>
                <div class="form-group">
                  <label for="pic12Heading">Heading</label>
                  <input type="text" name="pic12Heading" class="form-control" id="pic12Heading">
                </div>
                <div class="form-group">
                  <label for="pic12Description">Description</label>
                  <textarea name="pic12Description" rows="5" cols="10" class="form-control" id="pic12Description" placeholder="not more than 500 words!"></textarea>
                </div>
                <div class="form-group">
                  <label for="pic12Mrp">MRP</label>
                  <input type="text" name="pic12Mrp" class="form-control" id="pic12Mrp"><span>(in Rs.)</span>
                </div>
                <div class="form-group">
                  <label for="pic12Snp">SNP</label>
                  <input type="text" name="pic12Snp" class="form-control" id="pic12Snp"><span>(in Rs.)</span>
                </div>
                <a class="btn btn-primary" id="pic12UpdateBtn">Update</a>

              </form>
            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <h4 class="text-center text-primary">Image 13</h4>
            <form id="pic13Form">
              <div class="form-group">
                <label for="file">Choose Image</label>
                <input type="file" name="" class="form-control" id="pic13">
              </div>
              <div class="form-group">
                <label for="pic13Heading">Heading</label>
                <input type="text" name="pic13Heading" class="form-control" id="pic13Heading">
              </div>
              <div class="form-group">
                <label for="pic13Description">Description</label>
                <textarea name="pic13Description" rows="5" cols="10" class="form-control" id="pic13Description" placeholder="not more than 500 words!"></textarea>
              </div>
              <div class="form-group">
                <label for="pic13Mrp">MRP</label>
                <input type="text" name="pic13Mrp" class="form-control" id="pic13Mrp"><span>(in Rs.)</span>
              </div>
              <div class="form-group">
                <label for="pic13Snp">SNP</label>
                <input type="text" name="pic13Snp" class="form-control" id="pic13Snp"><span>(in Rs.)</span>
              </div>
              <div class="form-group">
                <a class="btn btn-primary" id="pic13UpdateBtn">Update</a>
              </div>
            </form>
          </div>
          <div class="col-md-3">
            <h4 class="text-center text-primary">Image 14</h4>

            <form id="pic14Form">
              <div class="form-group">
                <label for="file">Choose Image</label>
                <input type="file" name="" class="form-control" id="pic14">
              </div>
              <div class="form-group">
                <label for="pic14Heading">Heading</label>
                <input type="text" name="pic14Heading" class="form-control" id="pic14Heading">
              </div>
              <div class="form-group">
                <label for="pic14Description">Description</label>
                <textarea name="pic14Description" rows="5" cols="10" class="form-control" id="pic14Description" placeholder="not more than 500 words!"></textarea>
              </div>
              <div class="form-group">
                <label for="pic14Mrp">MRP</label>
                <input type="text" name="pic14Mrp" class="form-control" id="pic14Mrp"><span>(in Rs.)</span>
              </div>
              <div class="form-group">
                <label for="pic14Snp">SNP</label>
                <input type="text" name="pic14Snp" class="form-control" id="pic14Snp"><span>(in Rs.)</span>
              </div>
              <div class="form-group">
                <a class="btn btn-primary" id="pic14UpdateBtn">Update</a>
              </div>
            </form>
          </div>
          <div class="col-md-3">
            <h4 class="text-center text-primary">Image 15</h4>

            <form id="pic15Form">
              <div class="form-group">
                <label for="file">Choose Image</label>
                <input type="file" name="" class="form-control" id="pic15">
              </div>
              <div class="form-group">
                <label for="pic15Heading">Heading</label>
                <input type="text" name="pic15Heading" class="form-control" id="pic15Heading">
              </div>
              <div class="form-group">
                <label for="pic15Description">Description</label>
                <textarea name="pic15Description" rows="5" cols="10" class="form-control" id="pic15Description" placeholder="not more than 500 words!"></textarea>
              </div>
              <div class="form-group">
                <label for="pic15Mrp">MRP</label>
                <input type="text" name="pic15Mrp" class="form-control" id="pic15Mrp"><span>(in Rs.)</span>
              </div>
              <div class="form-group">
                <label for="pic15Snp">SNP</label>
                <input type="text" name="pic15Snp" class="form-control" id="pic15Snp"><span>(in Rs.)</span>
              </div>
              <div class="form-group">
                <a class="btn btn-primary" id="pic15UpdateBtn">Update</a>
              </div>
            </form>
          </div>
          <div class="col-md-3">
            <h4 class="text-center text-primary">Image 16</h4>

            <form id="pic16Form">
              <div class="form-group">
                <label for="file">Choose Image</label>
                <input type="file" name="" class="form-control" id="pic16">
              </div>
              <div class="form-group">
                <label for="pic16Heading">Heading</label>
                <input type="text" name="pic16Heading" class="form-control" id="pic16Heading">
              </div>
              <div class="form-group">
                <label for="pic16Description">Description</label>
                <textarea name="pic16Description" rows="5" cols="10" class="form-control" id="pic16Description" placeholder="not more than 500 words!"></textarea>
              </div>
              <div class="form-group">
                <label for="pic16Mrp">MRP</label>
                <input type="text" name="pic16Mrp" class="form-control" id="pic16Mrp"><span>(in Rs.)</span>
              </div>
              <div class="form-group">
                <label for="pic16Snp">SNP</label>
                <input type="text" name="pic16Snp" class="form-control" id="pic16Snp"><span>(in Rs.)</span>
              </div>
              <a class="btn btn-primary" id="pic16UpdateBtn">Update</a>

            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <h4 class="text-center text-primary">Image 17</h4>
            <form id="pic17Form">
              <div class="form-group">
                <label for="file">Choose Image</label>
                <input type="file" name="" class="form-control" id="pic17">
              </div>
              <div class="form-group">
                <label for="pic17Heading">Heading</label>
                <input type="text" name="pic17Heading" class="form-control" id="pic17Heading">
              </div>
              <div class="form-group">
                <label for="pic17Description">Description</label>
                <textarea name="pic17Description" rows="5" cols="10" class="form-control" id="pic17Description" placeholder="not more than 500 words!"></textarea>
              </div>
              <div class="form-group">
                <label for="pic17Mrp">MRP</label>
                <input type="text" name="pic17Mrp" class="form-control" id="pic17Mrp"><span>(in Rs.)</span>
              </div>
              <div class="form-group">
                <label for="pic17Snp">SNP</label>
                <input type="text" name="pic17Snp" class="form-control" id="pic17Snp"><span>(in Rs.)</span>
              </div>
              <div class="form-group">
                <a class="btn btn-primary" id="pic17UpdateBtn">Update</a>
              </div>
            </form>
          </div>
          <div class="col-md-3">
            <h4 class="text-center text-primary">Image 18</h4>

            <form id="pic18Form">
              <div class="form-group">
                <label for="file">Choose Image</label>
                <input type="file" name="" class="form-control" id="pic18">
              </div>
              <div class="form-group">
                <label for="pic18Heading">Heading</label>
                <input type="text" name="pic18Heading" class="form-control" id="pic18Heading">
              </div>
              <div class="form-group">
                <label for="pic18Description">Description</label>
                <textarea name="pic18Description" rows="5" cols="10" class="form-control" id="pic18Description" placeholder="not more than 500 words!"></textarea>
              </div>
              <div class="form-group">
                <label for="pic18Mrp">MRP</label>
                <input type="text" name="pic18Mrp" class="form-control" id="pic18Mrp"><span>(in Rs.)</span>
              </div>
              <div class="form-group">
                <label for="pic18Snp">SNP</label>
                <input type="text" name="pic18Snp" class="form-control" id="pic18Snp"><span>(in Rs.)</span>
              </div>
              <div class="form-group">
                <a class="btn btn-primary" id="pic18UpdateBtn">Update</a>
              </div>
            </form>
          </div>
          <div class="col-md-3">
            <h4 class="text-center text-primary">Image 19</h4>

            <form id="pic19Form">
              <div class="form-group">
                <label for="file">Choose Image</label>
                <input type="file" name="" class="form-control" id="pic19">
              </div>
              <div class="form-group">
                <label for="pic19Heading">Heading</label>
                <input type="text" name="pic19Heading" class="form-control" id="pic19Heading">
              </div>
              <div class="form-group">
                <label for="pic19Description">Description</label>
                <textarea name="pic19Description" rows="5" cols="10" class="form-control" id="pic19Description" placeholder="not more than 500 words!"></textarea>
              </div>
              <div class="form-group">
                <label for="pic19Mrp">MRP</label>
                <input type="text" name="pic19Mrp" class="form-control" id="pic19Mrp"><span>(in Rs.)</span>
              </div>
              <div class="form-group">
                <label for="pic19Snp">SNP</label>
                <input type="text" name="pic19Snp" class="form-control" id="pic19Snp"><span>(in Rs.)</span>
              </div>
              <div class="form-group">
                <a class="btn btn-primary" id="pic19UpdateBtn">Update</a>
              </div>
            </form>
          </div>
          <div class="col-md-3">
            <h4 class="text-center text-primary">Image 20</h4>

            <form id="pic20Form">
              <div class="form-group">
                <label for="file">Choose Image</label>
                <input type="file" name="" class="form-control" id="pic20">
              </div>
              <div class="form-group">
                <label for="pic20Heading">Heading</label>
                <input type="text" name="pic20Heading" class="form-control" id="pic20Heading">
              </div>
              <div class="form-group">
                <label for="pic20Description">Description</label>
                <textarea name="pic20Description" rows="5" cols="10" class="form-control" id="pic20Description" placeholder="not more than 500 words!"></textarea>
              </div>
              <div class="form-group">
                <label for="pic20Mrp">MRP</label>
                <input type="text" name="pic20Mrp" class="form-control" id="pic20Mrp"><span>(in Rs.)</span>
              </div>
              <div class="form-group">
                <label for="pic20Snp">SNP</label>
                <input type="text" name="pic20Snp" class="form-control" id="pic20Snp"><span>(in Rs.)</span>
              </div>
              <a class="btn btn-primary" id="pic20UpdateBtn">Update</a>

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
  <script src="js/refrigerator.js"></script>


</body>
</html>
