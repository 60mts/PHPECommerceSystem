<?php include_once '../gentelella-master/gentelella-master/funcFile/connect.php';

include '../gentelella-master/gentelella-master/production/function.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link href="index.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BESTi BURADA</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,500;0,700;1,500;1,700&family=IBM+Plex+Sans:ital,wght@0,500;0,600;0,700;1,500;1,700&family=Josefin+Sans:ital,wght@0,400;1,200&family=Oswald&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
			

</head><!--/head-->

<body>
	<header id="header" ><!--header-->
		<div class="header_top" style="background-color:#EFF5F5;"><!--header_top-->
			<div class="container" >
				<div class="row" >
					<div class="col-sm-6" >
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<!--<li><a href="#"><i class="fa fa-phone"></i> </a></li>-->
								<li><a href="#"><i class="fa fa-envelope"></i> musteritemsilcisi@60mts.com.tr </a></li>
</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo $ayarcek['settingFacebook'] ?>"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle "><!--header-middle-->
			<div class="container ">
				<div class="row">
					<div class="col-sm-4 ">
						<div class="logo pull-left">
							<a href="index"><img src="images/home/alt.png" alt="" style="width:250px; user-select:none;" /></a>
						</div>
						
						
						</div>
					</div>
                    <div class="col-sm-3 hidd" style=" color:white;">
						<div class="shop-menu pull-right " >
						
						<ul class="nav navbar-nav" >
								<button type="button" class="btn btn-outline"style="margin-left:-200px; color:white;"> <a href="cart" style="color:orange;"><i class="bi bi-bag-fill ms-3 fs-22" style="font-size:30px;padding:10px "></i>
							
							<h4 style="float:right;">Sepetim</h4><br>
						
							
							</a></button>
							</ul>
							<ul class="nav navbar-nav  ">
								<button type="button" class="btn btn-dark"  style="color:gray; "> <a href="login" style="color:orange;"><i class="bi bi-file-lock2" style="font-size:30px;"></i> <b>    </b></a></button>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col">


						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left" style="">
							<ul class="nav navbar-nav collapse navbar-collapse">

								
							</ul>
						</div>
					</div>
					
					
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider" style="background-image:url('images/home/slider.svg');  background-repeat: no-repeat; background-size:cover, 40%; background-position:center;  height:660px;  background-clip: content-box;">
		
	<!--slider-->
	<div class="container md-center" style="padding:75px;">

		<div class="container" style="width:100%;  ">
			<div class="row">
				<div class="col-sm-12" style="border-radius:50px;color:white;">
					
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators" style="padding-top:150px;">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner " >
							<div class="item active" >
								<div class="col-sm-6">
									<h1><img src="images/home/alt.png" style="width:150px; user-select:none;"></h1>
									<h2 style="color:white">Herşeyin "BEST-i" burada !</h2>
									<p style="color:white"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-dark" style="width:200px; padding:20px;">Get it now</button>
								</div>
								<div class="col-sm-6 m-10">
									<img src="images/home/comp.png" class="girl img-responsive hidden-xs hidden-sm" alt="" />
									<img src="images/home/1.svg" style="width:150px;" class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
								<h1><img src="images/home/alt.png" style="width:150px; user-select:none;"></h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/comp.jpg" class="girl img-responsive hidden-xs hidden-sm" alt="" />
									<img src="images/home/1.svg" style="width:150px;" class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
								<h1><img src="images/home/alt.png" style="width:150px; user-select:none;"></h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/asus.jpg" class="girl img-responsive hidden-xs hidden-sm" alt="" />
									<img src="images/home/1.svg" style="width:150px;" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel" data-slide="prev">
						<i class="bi bi-arrow-left" style=" margin-left:-150px;"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel " data-slide="next" >
						<i class="bi bi-arrow-right" style="margin-right:-450px;"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
</div>
	</section><!--/slider-->

			</div>
		<div class="BestFirsatlar">
	<div class="container" style="" >
		<div class="row" style="">
		<div class="col-sm-12 col-lg-3 col-md-4" style="width:250px; height:550px; margin-left:-100px;">
				<section><b>KAÇMAZ BU FIRSAT!</b>NATRO ... </section>
					<img src="images/home/bestComp.svg" style="user-select:none;">
					
			</div>
			<div class="col-sm-2" style="width:250px; height:550px;">2
			<img src="images/home/bestMsi.svg" style="user-select:none;"></div>
			<div class="col-xs-2" style="width:250px; height:550px;">3 
			<img src="images/home/bestComp.svg" style="user-select:none;"></div>
			<div class="col-xs-2" style="width:250px; height:550px;">4 
			<img src="images/home/bestComp.svg" style="user-select:none;"></div>
			<div class="col-xs-2" style="width:250px; height:550px;">5
			<img src="images/home/bestComp.svg" style="user-select:none;"></div>
			
	
</div>
</div>		
</div>
	<div class="Kampanyalar">
	<div class="container md-center text-center hidden-sm" >
		<div class="row" style="float:left; margin-left:-100px;">
				<div class="col-sm-12 col-lg-2 md-center d-flex justify-content-center" style="width:250px; height:550px;">
				<section><b>KAÇMAZ BU FIRSAT!</b>NATRO ... </section>
					<img src="images/home/bestKasim.svg" style="">
					
</div>
					<div class="col-sm-12 col-lg-2 md-center" style="width:250px; height:550px;">
					<section> PUMA KOLEKSİYONLAR! </section>
					<img src="images/home/bestMsi.svg" style="">

</div>
					<div class="col-sm-12 col-lg-2 md-center" style="width:250px; height:550px;">
					<section> PUMA KOLEKSİYONLAR! </section>
					<img src="images/home/bestPayUst.svg" style="">
</div>
<div class="col-sm-12 col-lg-2 md-center" style="width:250px; height:550px;">
<section> PUMA KOLEKSİYONLAR! </section>
					<img src="images/home/besPuma.svg" style="">
</div>

</div>
<div class="col-sm-12 col-lg-2 md-center hidden-xs" style="width:250px; height:550px; ">
<section> PUMA KOLEKSİYONLAR! </section>
					<img src="images/home/besPuma.svg" style="">
</div>
					<hr>
					
</div>
		

</div>
<hr>
	<div class="container hidden-xs ">
		<h3 style="padding:20px;" class="hidden-sm"> Besti Burada ayrıcalıkları</h3>
</div>
<div class="hidden-xs hidden-sm" style="width:100%;  height:200px; background-color:orange; padding:20px;">

<div class="container md-center fluid  ">
	<div class="row">
	<div class="col-sm-12 col-lg-2 md-center" style=" width:128px; height:80px; color:white;margin-left:50px; ">

<section style="">

	<img src="images/home/altKisim.svg" width="150">


</section>
<h5 class="">Besti Premium'u Keşfet</h5>
</div>
<div class=" col-sm-12 col-lg-2 md-center" style=" width:128px; height:80px; color:white;margin-left:50px;">


<img src="images/home/altKisim.svg" width="150">

<h5 class="">Besti Premium'u Keşfet</h5>
</div>
<div class="col-sm-12 col-lg-2 md-center" style=" width:128px; height:80px; color:white; margin-left:50px; ">


<img src="images/home/altKisim.svg" width="150">


</section>
<h5 class="">Besti Premium'u Keşfet</h5>
</div>
<div class=" col-sm-12 col-lg-2 md-center" style=" width:128px; height:80px; color:white; margin-left:50px;">

<section style="">

<img src="images/home/altKisim.svg" width="150">

</section>
<h5 class="">Besti Premium'u Keşfet</h5>
</div>
<div class="col-sm-12 col-lg-2 md-center "  style=" width:128px; height:80px; color:white;margin-left:50px; ">

<section style="">
<img src="images/home/altKisim.svg" width="150">


</section>
<h5 class="">Besti Premium'u Keşfet</h5>
</div>
<div class="col-sm-12 col-lg-2 md-center mx-5" style=" width:128px; height:80px; color:white; margin-left:50px; ">

<section style="">

<img src="images/home/altKisim.svg" width="150">

</section>
<h5 class="">Besti Premium'u Keşfet</h5>
</div>


</div>
</div>
</div>
</div>
</div>
<div class="en-iyi-fiyatlar">
	<div class="container fluid">
		<div class="row">
			<div class="col-">
				<img src="images/home/bestfiyat.svg" style="width:150px; user-select:none;">
		</div>

				<section class="col-lg-2">
					<a href="#" class="d-flex align-item-center">
				<button type="button" class="" style="padding:20px; width:200px; border-radius:100px; border:none; background-color:#F39200; color:white; margin-top:0">TÜMÜ <i class="bi bi-arrow-right me-3"></i></button></a>
</section>
			
</div></div>
</div>

</div>
</div>

<!--<div class=" container text-center items-center" style="width:100%; height:600px; background-color:gray; color:orange; margin-top:10px;"> 



		<h5> Burası Best fiyatların alanıdır. </h5>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">

		<img src="images/home/best-fiyat-icerik.svg" style="width:450px; height:550px; ">
</div>

			<div class="col-sm-6">

			<img src="images/home/best-fiyat-icerik.svg" style="width:450px; height:550px;">
			</div>
</div>
</div>
</div>-->

	<section>
			<div class="container" style="margin-top:100px;">
			<div class="row">
				<div class="col">

				<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center"><img src="images/home/bestSa.svg"style="width:190px;"></h2>
						<div class="container">
							<div class="row">
								<div class="col">
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
									<i class="bi bi-heart-fill" style="font-size:30px; float:left; color:red;"></i>
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/hp.jpg" alt="" />
													<section style="padding:20px;">
													<i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></section>
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart" style="border-radius:50px;"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
									<i class="bi bi-heart" style="font-size:30px; float:left;"></i>
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/hp.jpg" alt="" />
													<section style="padding:20px;">
													<i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></section>
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart" style="border-radius:50px;"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
									<i class="bi bi-heart" style="font-size:30px; float:left;"></i>
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/hp.jpg" alt="" />
													<section style="padding:20px;">
													<i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></section>
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart" style="border-radius:50px;"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
									<i class="bi bi-heart" style="font-size:30px; float:left;"></i>
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/hp.jpg" alt="" />
													<section style="padding:20px;">
													<i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></section>
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart" style="border-radius:50px;"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										
									<i class="bi bi-heart" style="font-size:30px; float:left;"></i>
										<div class="product-image-wrapper">
											<div class="single-products">
												
												<div class="productinfo text-center">
													

													<img src="images/home/hp.jpg" alt="" />
													<section style="padding:20px;">
													<i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></section>
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart" style="border-radius:50px;"><i class="fa fa-shopping-cart"></i>Add to cart</a>

												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4" >
									<i class="bi bi-heart" style="font-size:30px; float:left;"></i>
										<div class="product-image-wrapper">
											<div class="single-products" style="border-radius:50px;">
												<div class="productinfo text-center"  >
													<img src="images/home/casper.jpg" alt="" />
													<section style="padding:20px;">
													<i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></section>
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													
													<a href="#" class="btn btn-default add-to-cart" style="border-radius:50px;"><i class="fa fa-shopping-cart" ></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="bi bi-arrow-left" style="border-radius:50px;"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="bi bi-arrow-right" style="border-radius:50px;"></i>
							  </a>			
						</div>
					</div>
</div>
</div>				
					<!--<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products d-flex" id="">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Sportswear
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Nike </a></li>
											<li><a href="#">Under Armour </a></li>
											<li><a href="#">Adidas </a></li>
											<li><a href="#">Puma</a></li>
											<li><a href="#">ASICS </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
											<li><a href="#">Armani</a></li>
											<li><a href="#">Prada</a></li>
											<li><a href="#">Dolce and Gabbana</a></li>
											<li><a href="#">Chanel</a></li>
											<li><a href="#">Gucci</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Kids</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Fashion</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Households</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Interiors</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Clothing</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Bags</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Shoes</a></h4>
								</div>
							</div>
						</div>category-products
					
						<div class="brands_products">
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div>
						-->
						<!--<div class="price-range">
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div>/price-range-->
						
					
					
					</div>
				</div><!--features_items-->
			<div class="d-flex justify-content-center"></div>
				<div class="col-lg-9 md-center align-items-center" style="border-radius:30px; color:black; padding:50px;">
					<div class="features_items">
						<h2 class="title text-center"><img src="images/home/bestPro.svg" style="width:190px;"></h2>
						<div class="container">
				<div class="row">
				
						<div class="col-lg-9 md-center aling-items-center text-center">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/casper.jpg" alt="" />
											<section style="padding:20px;">
													<i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></section>
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
											<section style="padding:20px;">
													<i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></section>
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/casper.jpg" alt="" />
										<section style="padding:20px;">
													<i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></section>
										<h2>$56</h2>
										<p>Easy Polo Black Edition</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
										<section style="padding:20px;">
													<i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></section>
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/casper.jpg" alt="" />
										<section style="padding:20px;">
													<i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></section>
										<h2>$56</h2>
										<p>Easy Polo Black Edition</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
										<section style="padding:20px;">
													<i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></section>
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/casper.jpg" alt="" />
										<section style="padding:20px;">
													<i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></section>
										<h2>$56</h2>
										<p>Easy Polo Black Edition</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
										<section style="padding:20px;">
													<i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></section>
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
									<img src="images/home/new.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/casper.jpg" alt="" />
										<section style="padding:20px;">
													<i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></section>
										<h2>$56</h2>
										<p>Easy Polo Black Edition</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
										<section style="padding:20px;">
													<i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></section>
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
									<img src="images/home/sale.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/casper.jpg" alt="" />
										<section style="padding:20px;">
													<i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></section>
										<h2>$56</h2>
										<p>Easy Polo Black Edition</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
										<section style="padding:20px;">
													<i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></section>
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
</div>
					</div>
</div>
</div>
</div>

					
					<!--features_items-->
<!--					
					<div class="category-tab">
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
								<li><a href="#blazers" data-toggle="tab">Blazers</a></li>
								<li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
								<li><a href="#kids" data-toggle="tab">Kids</a></li>
								<li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="blazers" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="sunglass" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="kids" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="poloshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>-->
					
					<!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	<?php include 'footer.php';