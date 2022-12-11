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
	<header id="header"  style="position:static;"><!--header-->
		<div class="header_top" style="background-color:#EFF5F5;"><!--header_top-->
			<div class="container" >
				<div class="row" >
					<div class="col-sm-6" >
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<!--<li><a href="#"><i class="fa fa-phone"></i> </a></li>-->
								<li><a href="mailto:musteritemsilcis@bestiburada.online"><i class="fa fa-envelope"></i> musteritemsilcisi@bestiburada.online </a></li>
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
		<!--<div style="width:100%; display:block; float:left; text-decoration:none; list-style-type:none; overflow:hidden; margin:0; padding:20px;">
			<ul style="">
				<li style="float:left; display:block;">
						Siparişlerim
				</li>
				<li style="float:left; display:block;">
					Best Fiyat, Best Teklif
				</li style="float:left;">
				<li>
					Best Yurt Dışından
				</li>
				<li style="float:left; display:block;">
					Kampanyalar
				</li>
				<li style="float:left; display:block;">
					Çözüm merkezi
				</li>
				<li style="float:left; display:block;">
					BEST Premium
				</li>
				<li style="float:left; display:block;">
					BEST Satıcı ol
				</li>
			</ul>
</div>-->
	
	<div class="header-center" style="padding:50px; width:100%; background-color:#D6E4E5;  ">
<div class="img-fluid">
	<img src="images/home/alt.png" align="right" width="150" style="user-select:none;">
	
	
	<button class="btn btn-outline-success hidden-xs" type="button" style="500px; padding:20px; float:right; margin-top:-30px; margin-right:20px;"> <i class="bi bi-geo-alt-fill"></i> KONUM <br>
		<p style="font-size:10px;">Konum Seç <i class=" bi bi-arrow-down-short"></i></p> 

</button>
	
	<div id="buttons"> 

	<button type="button" class="btn btn-outline-success " style="padding:10px; text-align:center; border:3px solid gray; color:gray;"><i class="bi bi-person-fill "></i><b>Giriş Yap</b>

	
		<p style="font-size:8px;">veya üye ol </p>




	</button>
	<!--<a href="cart" style="color:white; text-decoration:none;">-->
	<button type="button" class="btn btn-dark" style="padding:20px; border:3px solid gray; background-color:gray; color:white;"><i class="bi bi-basket"></i> <b>Sepetim </b> </button> 
</div>
	<div class="" style="">


	

</div>
</div>
<div class="" align="center">
	<input type="center" placeholder="Ne lazımsa ara.." style="padding:20px; border-radius:3px; border:2px solid orange; outline:none; width:350px;"><button type="button" style="background-color:transparent; border:none; margin-left:-40px;"> <i class="bi bi-search"></i></button>
</div>


</div>



                    <!--<div class="col-sm-2" style="" color:white;">
						<div class="shop-menu pull-right">
						
						<ul class="nav navbar-nav" >
								<button type="button" class=""style="margin-left:-60px; color:white;"> <a href="cart" style="color:orange;"><i class="bi bi-bag-fill ms-3 fs-22" style="font-size:30px;padding:10px "></i>
							
							<h4 style="float:right;"></h4><br>
						
							
							<div class="col-sm-6">
							</a></button>
							</ul>
							<ul class="nav navbar-nav">
								<button type="button" class=""  style="color:gray;border:none; background-color:#000000; "> <a href="login" style="color:orange;"><i class="bi bi-file-lock2" style="font-size:30px;"></i> <b>    </b></a></button>
							</ul>
						</div>
</div>
					</div>
				</div>
			</div>
		</div>/header-middle-->
	
		<div class="header-bottom" style="background-color:#EEEEEE; color:white; text-align:center"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9" style="">


						<div class="navbar-header" style="">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Responsive Menu</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left" style="margin-top:20px; ">
							<ul class="nav navbar-nav collapse navbar-collapse " >
								
							<?php  $menusor=$db->prepare("SELECT * FROM menu where menuState=:durum order by menuSira ASC limit 5");
									$menusor->execute(array(
										'durum' => 1

									));
									while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {
										?>
										
											<li> <b><a href="
											<?php
											if(!empty($menucek['menuUrl'])){

												echo $menucek['menuUrl'];

											}
											else{

												echo "sayfa-".seo($menucek['menuName']);
											}
											
												?>
											
											"><?php echo $menucek['menuName']; ?> </b></li></a>
                                
									<?php } ?>
							
								
							</ul>
						</div>
					</div>
					
					
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider" style="background-color:transparent; border:5px solid #F39200; border-radius:30px; background-repeat: no-repeat;  background-position:center; color:orange; height:700px;  ">
		
	<!--slider-->
	<div class="container " style="border-radius:30px; margin-top:30px;">

		<div class="container" style="width:100%;  ">
			<div class="row">
				<div class="col-md-12 md-center"  style="border-radius:30px;color:orange; padding:75px;">
					
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
									<h2>Herşeyin "BEST-i" burada !</h2>
									<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
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
						<i class="bi bi-arrow-left" style="margin-left:-80px;"></i>
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
	<div class="container-fluid " style="" >
		<div class="row" style="padding:50px">
		<div class="col-sm-12 col-lg-2 center" style=" margin-left:35px;">
				<section><b>KAÇMAZ BU FIRSAT!</b>NATRO ... </section>
					<img src="images/home/bestComp.png" style="user-select:none;">
					
			</div>
			<div class="col-sm-2 col-md-12 col-lg-2" style=" margin-left:30px;">1
			<img src="images/home/besttt.png" style=""></div>
			<div class="col-sm-2 col-md-12 col-lg-2" style="margin-left:30px;">3 
			<img src="images/home/besttt.png" style=""></div>
			<div class="col-sm-2 col-md-12 col-lg-2" style="margin-left:30px;">4 
			<img src="images/home/besttt.png" style=""></div>
			<div class="col-sm-2 col-md-12 col-lg-2" style="margin-left:30px;">5
			<img src="images/home/besttt.png" style=""></div>
			
	
</div>
</div>		
</div>

	<div class="Kampanyalar">
	<div class="container-fluid" >
		<div class="row" style="padding:50px;;">
				<div class="col-md-12 col-lg-2" style="margin-left:30px;">
				<section><b>KAÇMAZ BU FIRSAT!</b>NATRO ... </section>
					<img src="images/home/bestttKasim.png" style="">
					
</div>
					<div class="col-sm-2 col-md-12 col-lg-2" style="margin-left:30px;">
					<section> PUMA KOLEKSİYONLAR! </section>
					<img src="images/home/bestttKasim.png" style="">

</div>
					<div class="col-sm-2 col-md-12 col-lg-2" style="margin-left:30px;">
					<section> PUMA KOLEKSİYONLAR! </section>
					<img src="images/home/bestttKasim.png" style="">
</div>
<div class="col-sm-2 col-md-12 col-lg-2" style="margin-left:30px;">
<section> PUMA KOLEKSİYONLAR! </section>
					<img src="images/home/bestttKasim.png" style="">
</div>
<div class="col-sm-2 col-md-12 col-lg-2" style="margin-left:30px;">
<section> PUMA KOLEKSİYONLAR! </section>
					<img src="images/home/bestttKasim.png" style="">
</div>

</div>							
</div>
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

	<img src="images/home/bestPremium.png" width="150">


</section>
<h5 class="">Besti Premium'u Keşfet</h5>
</div>
<div class=" col-sm-12 col-lg-2 md-center" style=" width:128px; height:80px; color:white;margin-left:50px;">


<img src="images/home/bestPremium.png" width="150">

<h5 class="">Besti Premium'u Keşfet</h5>
</div>
<div class="col-sm-12 col-lg-2 md-center" style=" width:128px; height:80px; color:white; margin-left:50px; ">


<img src="images/home/bestPremium.png" width="150">


</section>
<h5 class="">Besti Premium'u Keşfet</h5>
</div>
<div class=" col-sm-12 col-lg-2 md-center" style=" width:128px; height:80px; color:white; margin-left:50px;">

<section style="">

<img src="images/home/bestPremium.png" width="150">

</section>
<h5 class="">Besti Premium'u Keşfet</h5>
</div>
<div class="col-sm-12 col-lg-2 md-center "  style=" width:128px; height:80px; color:white;margin-left:50px; ">

<section style="">
<img src="images/home/bestPremium.png" width="150">


</section>
<h5 class="">Besti Premium'u Keşfet</h5>
</div>
<div class="col-sm-12 col-lg-2 md-center mx-5" style=" width:128px; height:80px; color:white; margin-left:50px; ">

<section style="">
<img src="images/home/bestPremium.png" width="150">

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
								<i class="bi bi-arrow-left" style="border-radius:50px; font-size:10px;"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="bi bi-arrow-right" style="border-radius:50px; font-size:10px;"></i>
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