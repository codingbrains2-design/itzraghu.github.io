<?php 
require_once 'php/database.php';
$img = $_GET['img'];
$stmt = $db->prepare("SELECT * FROM irons WHERE image_path=?");
$stmt->execute(array($img));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE HTML>
<head>
	<title>Free Smart Store Website Template | Preview :: w3layouts</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
	<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
	<script type="text/javascript" src="js/nav.js"></script>
	<script type="text/javascript" src="js/nav-hover.js"></script>
	<script type="text/javascript">
		$(document).ready(function($){
			$('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
		});
	</script>
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
					<div class="shopping_cart">
						<div class="cart">
							<a href="#" title="View my shopping cart" rel="nofollow">
								<strong class="opencart"> </strong>
								<span class="cart_title">Cart</span>
								<span class="no_product">(empty)</span>
							</a>
						</div>
					</div>
					<div class="languages">
						<div id="language" class="wrapper-dropdown" tabindex="1">EN
							<strong class="opencart"> </strong>
							<ul class="dropdown languges">					
								<li>
									<a href="#" title="Français">
										<span><img src="images/gb.png" alt="en" width="26" height="26"></span><span class="lang">English</span>
									</a>
								</li>
								<li>
									<a href="#" title="Français">
										<span><img src="images/au.png" alt="fr" width="26" height="26"></span><span class="lang">Français</span>
									</a>
								</li>
								<li>
									<a href="#" title="Español">
										<span><img src="images/bm.png" alt="es" width="26" height="26"></span><span class="lang">Español</span>
									</a>
								</li>
								<li>
									<a href="#" title="Deutsch">
										<span><img src="images/ck.png" alt="de" width="26" height="26"></span><span class="lang">Deutsch</span>
									</a>
								</li>
								<li>
									<a href="$" title="Russian">
										<span><img src="images/cu.png" alt="ru" width="26" height="26"></span><span class="lang">Russian</span>
									</a>
								</li>					
							</ul>
						</div>
						<script type="text/javascript">
							function DropDown(el) {
								this.dd = el;
								this.initEvents();
							}
							DropDown.prototype = {
								initEvents : function() {
									var obj = this;

									obj.dd.on('click', function(event){
										$(this).toggleClass('active');
										event.stopPropagation();
									});	
								}
							}

							$(function() {

								var dd = new DropDown( $('#language') );

								$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown').removeClass('active');
				});

							});

						</script>
					</div>
					<div class="currency">
						<div id="currency" class="wrapper-dropdown" tabindex="1">$
							<strong class="opencart"> </strong>
							<ul class="dropdown">
								<li><a href="#"><span>$</span>Dollar</a></li>
								<li><a href="#"><span>€</span>Euro</a></li>
							</ul>
						</div>
						<script type="text/javascript">
							function DropDown(el) {
								this.dd = el;
								this.initEvents();
							}
							DropDown.prototype = {
								initEvents : function() {
									var obj = this;

									obj.dd.on('click', function(event){
										$(this).toggleClass('active');
										event.stopPropagation();
									});	
								}
							}

							$(function() {

								var dd = new DropDown( $('#currency') );

								$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown').removeClass('active');
				});

							});

						</script>
					</div>
					<!-- <div class="login">
						<span><a href="login.html"><img src="images/login.png" alt="" title="login"/></a></span>
					</div> -->
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
		</div>
		<div class="main">
			<div class="content">
				<div class="content_top">
					
					<div class="clear"></div>
				</div>
				<div class="section group">
					<div class="cont-desc span_1_of_2">				
						<div class="grid images_3_of_2">
							<img src="<?php echo substr($row['image_path'],6); ?>" alt="" />
						</div>
						<div class="desc span_3_of_2">
							<h2><?php echo $row['heading'];?></h2>
							<p><?php echo $row['description'];?></p>

							<div class="price">
								<p>Price: <span>Rs.<?php echo $row['snp']; ?></span></p>
							</div>
							<div class="available">
								<p>Available Options :</p>
								<ul>
									<li>Color:
										<select>
											<option>Silver</option>
											<option>Black</option>
											<option>Dark Black</option>
											<option>Red</option>
										</select></li>
										<li>Size:<select>
											<option>Large</option>
											<option>Medium</option>
											<option>small</option>
											<option>Large</option>
											<option>small</option>
										</select></li>
										
									</ul>
								</div>
								
							</div>

							<div class="product-desc">
								<h2>Product Details</h2>
								<br>
								<p><?php echo $row['description'];?></p>
								
							</div>
							
						</div>
						<div class="rightsidebar span_3_of_1">
							<h2>CATEGORIES</h2>
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

