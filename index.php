<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong>User</strong></div>
	 <div class="span6">
	<div class="pull-right">
		<!-- <a href="product_summary.php"><span class="">Fr</span></a>
		<a href="product_summary.php"><span class="">Es</span></a>
		<span class="btn btn-mini">En</span>
		<a href="product_summary.php"><span>&pound;</span></a>
		<span class="btn btn-mini">$155.00</span>
		<a href="product_summary.php"><span class="">$</span></a> -->
		<a href="login.php"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.php"><img src="themes/images/logo.png" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="login.php" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="login.php">Specials Offer</a></li>
	 <li class=""><a href="login.php">Delivery</a></li>
	 <li class=""><a href="login.php">Contact</a></li>
	 <li class="">
	 <a href="login.php" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		 
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="carouselBlk">
	<div id="myCarousel" <!--class="carousel slide"-->
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a href=" register.php"><img style="width:100%" src="themes/images/carousel/1.png" alt="special offers"/></a>
			
		 
		  </div>
		  
		  </div>
		  </div>
		</div>
		
	  </div> 
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">

<div class="span9">		
			<div class="well well-small">
			<h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
			<div class="row-fluid">
			<div id="featured" >
			<div class="carousel-inner">
			  <div class="item active">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="login.php"><img src="themes/images/products/b1.jpg" alt=""></a>
					<div class="caption">
					  <h5>Shoes(Red)</h5>
					  <h4><a class="btn" href="login.php">VIEW</a> <span class="pull-right"> ₹800.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="login.php"><img src="themes/images/products/b2.jpg" alt=""></a>
					<div class="caption">
					  <h5>Brown Shoes</h5>
					  <h4><a class="btn" href="login.php">VIEW</a> <span class="pull-right"> ₹30000.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="login.php"><img src="themes/images/products/b3.jpg" alt=""></a>
					<div class="caption">
					  <h5>Blue Shoes</h5>
					   <h4><a class="btn" href="login.php">VIEW</a> <span class="pull-right"> ₹700.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="login.php"><img src="themes/images/products/b4.jpg" alt=""></a>
					<div class="caption">
					  <h5>Black Shoes</h5>
					   <h4><a class="btn" href="login.php">VIEW</a> <span class="pull-right"> ₹800.00</span></h4>
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="login.php"><img src="themes/images/products/5.jpg" alt=""></a>
					<div class="caption">
					  <h5>Digital SLR Camera</h5>
					  <h4><a class="btn" href="login.php">VIEW</a> <span class="pull-right"> ₹30000.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="login.php"><img src="themes/images/products/6.jpg" alt=""></a>
					<div class="caption">
					  <h5>Sandisk SDHC Card</h5>
					  <h4><a class="btn" href="login.php">VIEW</a> <span class="pull-right"> ₹200.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="login.php"><img src="themes/images/products/7.jpg" alt=""></a>
					<div class="caption">
					  <h5>Integral Card Reader</h5>
					   <h4><a class="btn" href="login.php">VIEW</a> <span class="pull-right"> ₹150.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="login.php"><img src="themes/images/products/8.jpg" alt=""></a>
					<div class="caption">
					  <h5>Sandisk Memory Card</h5>
					   <h4><a class="btn" href="login.php">VIEW</a> <span class="pull-right"> ₹600.00</span></h4>
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
					<a href="login.php"><img src="themes/images/products/9.jpg" alt=""></a>
					<div class="caption">
					  <h5>Panasonic Lens Camera</h5>
					  <h4><a class="btn" href="login.php">VIEW</a> <span class="pull-right"> ₹40000.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="login.php"><img src="themes/images/products/32.jpg" alt=""></a>
					<div class="caption">
					  <h5>Sandisk 32GB Memory Card</h5>
					  <h4><a class="btn" href="login.php">VIEW</a> <span class="pull-right"> ₹500.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="login.php"><img src="themes/images/products/11.jpg" alt=""></a>
					<div class="caption">
					  <h5>Digital Camera</h5>
					   <h4><a class="btn" href="login.php">VIEW</a> <span class="pull-right"> ₹25000.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="login.php"><img src="themes/images/products/1.jpg" alt=""></a>
					<div class="caption">
					  <h5>Nikon SLR Camera</h5>
					   <h4><a class="btn" href="login.php">VIEW</a> <span class="pull-right"> ₹20000.00</span></h4>
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
					<a href="login.php"><img src="themes/images/products/2.jpg" alt=""></a>
					<div class="caption">
					  <h5>Sony DSC Camera</h5>
					  <h4><a class="btn" href="login.php">VIEW</a> <span class="pull-right"> ₹700.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="login.php"><img src="themes/images/products/3.jpg" alt=""></a>
					<div class="caption">
					  <h5>Canon Eos Camera</h5>
					  <h4><a class="btn" href="login.php">VIEW</a> <span class="pull-right"> ₹15000.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="login.php"><img src="themes/images/products/4.jpg" alt=""></a>
					<div class="caption">
					  <h5>Sony Digital Camera</h5>
					   <h4><a class="btn" href="login.php">VIEW</a> <span class="pull-right"> ₹26000.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="login.php"><img src="themes/images/products/5.jpg" alt=""></a>
					<div class="caption">
					  <h5>Kevil Digital Camera</h5>
					   <h4><a class="btn" href="login.php">VIEW</a> <span class="pull-right"> ₹18000.00</span></h4>
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			  </div>
			  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
			  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
			  </div>
			  </div>
		</div>
		<h4>Latest Products </h4>
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
					<a  href="login.php"><img src="themes/images/products/6.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Sandisk SDHC Card</h5>
					 
					  <h4 style="text-align:center"><a class="btn" href="login.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"> ₹300.00</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="login.php"><img src="themes/images/products/7.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Integral Card Reader</h5>
					 <h4 style="text-align:center"><a class="btn" href="login.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"> ₹200.00</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="login.php"><img src="themes/images/products/8.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Sandisk Memory Card</h5>
					
					   <h4 style="text-align:center"><a class="btn" href="login.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"> ₹450.00</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="login.php"><img src="themes/images/products/9.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Nikol SLR Camera</h5>
		
					  <h4 style="text-align:center"><a class="btn" href="login.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"> ₹20000.00</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="login.php"><img src="themes/images/products/32.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Sandisc SDHC  Card</h5>
					 
					  <h4 style="text-align:center"><a class="btn" href="login.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"> ₹150.00</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="login.php"><img src="themes/images/products/11.jpg" alt=""/></a>
					<div class="caption">
					  <h5> Canon Lens Camera</h5>
					
					   <h4 style="text-align:center"><a class="btn" href="login.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"> ₹25000.00</a></h4>
					</div>
				  </div>
				</li>
			  </ul>	

		</div>
		</div>
	</div>
</div>
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			<!-- <!-- <div class="span3">
				<h5>ACCOUNT</h5>
				<a href="login.php">YOUR ACCOUNT</a>
				<a href="login.php">PERSONAL INFORMATION</a> 
				<a href="login.php">ADDRESSES</a> 
				<a href="login.php">DISCOUNT</a>  
				<a href="login.php">ORDER HISTORY</a>
			 </div> --> 
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="login.php">CONTACT</a>  
				<a href="register.php">REGISTRATION</a>  
				<a href="login.php">LEGAL NOTICE</a>  
				<a href="login.php">TERMS AND CONDITIONS</a> 
				<!-- <a href="login.php">FAQ</a> -->
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				<a href="special_offer.php">SPECIAL OFFERS</a>  
				<a href="#">MANUFACTURERS</a> 
				<!-- <a href="#">SUPPLIERS</a>  -->
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; Bootshop</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="themes/css/#" name="bootshop"><img src="themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
	<a href="themes/css/#" name="businessltd"><img src="themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
		<a href="themes/css/#" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
		<a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
		<a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>
<span id="themesBtn"></span>
</body>
</html>