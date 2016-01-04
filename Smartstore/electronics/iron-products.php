<?php
require_once 'php/database.php';
$stmt = $db->query("SELECT * FROM irons");
$row = $stmt->fetchall(PDO::FETCH_ASSOC);
?>
<!DOCTYPE HTML>
<head>
  <title>Free Smart Store Website Template | Home :: w3layouts</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
  <link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
  <link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
  <link rel="stylesheet" href="css/bootstrap.css">
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
      margin-top: -100px;
      margin-right:30px; 
    }
  </style>
</head>
<body>
  <div class="wrap">
   <div class="header">
    <div class="header_top">
     <div class="logo">
      <a href="index.php"><img src="images/logo.png" alt="" /></a>
    </div>
    <div class="header_top_right">

      <div class="clear"></div>
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
       <li><a href="tablets-products.php">Tablet</a></li>
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
  <li><a href="#">Delivery</a></li>
  <li><a href="faq.html">FAQS</a></li>
  <li><a href="contact.html">Contact</a> </li>
  <div class="clear"></div>
</ul>
</div>		
</div>
<div class="main">
  <div class="content">
   <div class="content_top">
    <div class="heading">
      <h3>Mobile Products</h3>
    </div>


    <div class="clear"></div>
  </div>
  <br>
  <!-- <div class="section group"> -->
  <div class="row">
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['0']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['0']['image_path'], 6);?>" class="img-responsive" alt="" />

      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['0']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['0']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['0']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['0']['mrp']-$row['0']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['0']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['1']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['1']['image_path'], 6);?>" class="img-responsive" alt="" />
      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['1']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['1']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['1']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['1']['mrp']-$row['1']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['1']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['2']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['2']['image_path'], 6);?>" class="img-responsive" alt="" />

      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['2']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['2']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['2']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['2']['mrp']-$row['2']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['2']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['3']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['3']['image_path'], 6);?>" class="img-responsive" alt="" />

      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['3']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['3']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['3']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['3']['mrp']-$row['3']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['3']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['4']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['4']['image_path'], 6);?>" class="img-responsive" alt="" />

      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['4']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['4']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['4']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['4']['mrp']-$row['4']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['4']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['5']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['5']['image_path'], 6);?>" class="img-responsive" alt="" />

      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['5']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['5']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['5']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['5']['mrp']-$row['5']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['5']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['6']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['6']['image_path'], 6);?>" class="img-responsive" alt="" />

      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['6']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['6']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['6']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['6']['mrp']-$row['6']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['6']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['7']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['7']['image_path'], 6);?>" class="img-responsive" alt="" />

      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['7']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['7']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['7']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['7']['mrp']-$row['7']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['7']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['8']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['8']['image_path'], 6);?>" class="img-responsive" alt="" />

      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['8']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['8']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['8']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['8']['mrp']-$row['8']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['8']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['9']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['9']['image_path'], 6);?>" class="img-responsive" alt="" />

      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['9']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['9']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['9']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['9']['mrp']-$row['9']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['9']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['10']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['10']['image_path'], 6);?>" class="img-responsive" alt="" />

      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['10']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['10']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['10']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['10']['mrp']-$row['10']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['10']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['11']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['11']['image_path'], 6);?>" class="img-responsive" alt="" />

      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['11']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['11']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['11']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['11']['mrp']-$row['11']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['11']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['12']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['12']['image_path'], 6);?>" class="img-responsive" alt="" />

      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['12']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['12']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['12']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['12']['mrp']-$row['12']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['12']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['13']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['13']['image_path'], 6);?>" class="img-responsive" alt="" />

      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['13']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['13']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['13']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['13']['mrp']-$row['13']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['13']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['14']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['14']['image_path'], 6);?>" class="img-responsive" alt="" />

      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['14']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['14']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['14']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['14']['mrp']-$row['14']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['14']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['15']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['15']['image_path'], 6);?>" class="img-responsive" alt="" />

      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['15']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['15']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['15']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['15']['mrp']-$row['15']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['15']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['16']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['16']['image_path'], 6);?>" class="img-responsive" alt="" />

      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['16']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['16']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['16']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['16']['mrp']-$row['16']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['16']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['17']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['17']['image_path'], 6);?>" class="img-responsive" alt="" />

      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['17']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['17']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['17']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['17']['mrp']-$row['17']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['17']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['18']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['18']['image_path'], 6);?>" class="img-responsive" alt="" />

      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['18']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['18']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['18']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['18']['mrp']-$row['18']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['18']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
    <div class="col-md-3">
      <a href="iron-preview.php?img=<?php echo $row['19']['image_path'] ;?>" class="thumbnail">
        <img src="<?php echo substr($row['19']['image_path'], 6);?>" class="img-responsive" alt="" />

      </a>
      <span class="caption text-center">
        <h4 class=" text-danger"><?php echo $row['19']['heading']?> </h4>
        <p><del class=" text-danger">Rs.<?php echo $row['19']['mrp']?></del>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['19']['snp']?></p>
        <h4 class="text-danger">You save: <span class="badge text-danger">Rs.<?php echo ($row['19']['mrp']-$row['19']['snp']) ?></span>  </h4>
        <a href="iron-preview.php?img=<?php echo $row['19']['image_path'] ;?>" class="btn btn-primary center-block">Details</a>
      </span>
    </div>
  </div>

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
</body>
</html>

