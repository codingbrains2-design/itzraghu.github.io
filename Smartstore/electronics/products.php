<?php
require_once 'php/database.php';
$stmt = $db->query("SELECT * FROM images");
$row = $stmt->fetchall(PDO::FETCH_ASSOC);
?>
<!DOCTYPE HTML>
<head>
  <title>Free Smart Store Website Template | Home :: w3layouts</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
  <link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script src="js/script.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
  <script type="text/javascript" src="js/nav.js"></script>
  <script type="text/javascript" src="js/move-top.js"></script>
  <script type="text/javascript" src="js/easing.js"></script>
  <script type="text/javascript" src="js/nav-hover.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
  <script type="text/javascript">
    $(document).ready(function($){
      $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
    });
  </script>
  <style>
    .pull-right
    {
      margin-top: -90px;
      margin-right:30px; 
    }
  </style>
</head>
<body>
  <div class="wrap">
    <div class="header">
      <div class="header_top">
        <div class="logo">
          <a href="index.html"><img src="images/logo.png" alt="" /></a>
        </div>
        <div class="header_top_right">
          <div class="search_box">
            <form>
              <input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
            </form>
          </div>
          <span class="social-icons pull-right">
            <h4>Follow Us</h4>
            <ul>
              <li class="facebook"><a href="#" target="_blank"> </a></li>
              <li class="twitter"><a href="#" target="_blank"> </a></li>
              <li class="googleplus"><a href="#" target="_blank"> </a></li>
              <li class="contact"><a href="#" target="_blank"> </a></li>
            </ul>
          </span>

          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="menu">
        <ul id="dc_mega-menu-orange" class="dc_mm-orange">
         <li><a href="index.php">Home</a></li>
         <li><a href="products.php">Products</a>
          <ul>
            <li><a href="mobile-products.php">Mobile Phones</a></li>
            <li><a href="television-products.php">Televisions</a></li>
            <li><a href="microwave-products.php">Microwave Oven</a></li>
            <li><a href="mixer-juicer-grinder-products.php">Mixer/Juicer/Grinder</a></li>
            <li><a href="washing-machine-products.php">Washing Machine</a></li>
            <li><a href="refrigerator-products.php">Refrigerator</a></li>
            <li><a href="iron-products.php">Iron</a></li>
            <li><a href="kent-ro-products.php">Kent RO Offline</a></li>
            <li><a href="livpure-products.php">Livpure Water-Purifier</a></li>
            <li><a href="tablet-products.php">Tablet</a></li>
            <li><a href="ac-products.php">ACs</a></li>
            <li><a href="miscellaneous-products.php">Miscellaneous</a></li>
          </ul>
        </li>
        <li><a href="products.html">Top Brands</a>
          <ul>
            <li><a href="products.html">Brand Name 1</a></li>
            <li><a href="products.html">Brand Name 2</a></li>
            <li><a href="products.html">Brand Name 3</a></li>
            <li><a href="#">Brand Name 4</a></li>
            <li><a href="#">Brand Name 5</a></li>
            <li><a href="#">Brand Name 6</a></li>
            <li><a href="#">Brand Name 7</a></li>
            <li><a href="#">Brand Name 8</a></li>
            <li><a href="#">Brand Name 9</a></li>
            <li><a href="#">Brand Name 10</a></li>
          </ul>
        </li>
        <li><a href="faq.html">Services</a>
          <ul>
            <li><a href="#">Service 1</a>
              <ul>
                <li><a href="#">Service Detail A</a></li>
                <li><a href="#">Service Detail B</a></li>
              </ul>
            </li>
            <li><a href="#">Service 2</a>
              <ul>
                <li><a href="#">Service Detail C</a></li>
              </ul>
            </li>
            <li><a href="#">Service 3</a>
              <ul>
                <li><a href="#">Service Detail D</a></li>
                <li><a href="#">Service Detail E</a></li>
                <li><a href="#">Service Detail F</a></li>
              </ul>
            </li>
            <li><a href="#">Service 4</a></li>
          </ul>
        </li>
        <li><a href="about.html">About</a></li>
        <!-- <li><a href="#">Delivery</a></li> -->
        <li><a href="faq.html">FAQS</a></li>
        <li><a href="contact.html">Contact</a> </li>
        <div class="clear"></div>
      </ul>
    </div>
    <div class="header_bottom">
      <div class="header_bottom_left">
        <section id = "img">
        </section>

        <div class="clear"></div>
      </div>

      <div class="clear"></div>
    </div>  
  </div>
  <div class="main">
    <div class="content">

      <div class="row">
        <div class="col-md-12 text-center">
          <h1>Choose Product</h1>   
        </div>
      </div>              
      <hr />
      <div class="row">
        <div class="col-md-3">
          <a href="mobile-products.php" class="thumbnail">
            <img src="admin/images/mobile.png" alt="">
            <div class="caption text-center">
              <button class="btn btn-primary">Mobiles</button>
            </div>
          </a>

        </div>
        <div class="col-md-3">
          <a href="television-products.php" class="thumbnail">
            <img src="admin/images/tv.png" alt="">
            <div class="caption text-center">
              <button class="btn btn-primary">Televisions</button>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="microwave-products.php" class="thumbnail">
            <img src="admin/images/microwave-oven.png" alt="">
            <div class="caption text-center">
              <button class="btn btn-primary">Microwave-Ovens</button>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="mixer-juicer-grinder-products.php" class="thumbnail">
            <img src="admin/images/mixer-grinder.png" alt="">
            <div class="caption text-center">
              <button class="btn btn-primary">Mixer/Juicer/Grinder</button>
            </div>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <a href="washing-machine-products.php" class="thumbnail">
            <img src="admin/images/washing-machine.png" alt="">
            <div class="caption text-center">
              <button class="btn btn-primary">Washing Machine</button>
            </div>
          </a>

        </div>
        <div class="col-md-3">
          <a href="refrigerator-products.php" class="thumbnail">
            <img src="admin/images/refrigerator.png" alt="">
            <div class="caption text-center">
              <button class="btn btn-primary">Refrigerator</button>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="ac-products.php" class="thumbnail">
            <img src="admin/images/ac.png" alt="">
            <div class="caption text-center">
              <button class="btn btn-primary">ACs</button>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="iron-products.php" class="thumbnail">
            <img src="admin/images/iron.png" alt="">
            <div class="caption text-center">
              <button class="btn btn-primary">Iron</button>
            </div>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <a href="kent-ro-products.php" class="thumbnail">
            <img src="admin/images/kent-ro.png" alt="">
            <div class="caption text-center">
              <button class="btn btn-primary">Kent RO Offline</button>
            </div>
          </a>

        </div>
        <div class="col-md-3">
          <a href="livpure-products.php" class="thumbnail">
            <img src="admin/images/livpure.png" alt="">
            <div class="caption text-center">
              <button class="btn btn-primary">Livpure Water Purifier</button>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="tablet-products.php" class="thumbnail">
            <img src="admin/images/tablet.png" alt="">
            <div class="caption text-center">
              <button class="btn btn-primary">Tablet</button>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="miscellaneous-products.php" class="thumbnail">
            <img src="admin/images/miscellaneous.png" alt="">
            <div class="caption text-center">
              <button class="btn btn-primary">Miscellaneous</button>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div>
  <?php require_once 'footer.php' ?>

  <script type="text/javascript">
    $(document).ready(function() {
      /*
      var defaults = {
          containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
      };
      */
      
      $().UItoTop({ easingType: 'easeOutQuart' });
      
    });
  </script>
  <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
  <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
</body>
</html>

