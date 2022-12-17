<?php include_once '../gentelella-master/gentelella-master/funcFile/connect.php';

include '../gentelella-master/gentelella-master/production/function.php';

?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<link href="index.css" rel="stylesheet">
    <meta charset="iso-8859-9">
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

												echo "sayfa-".Seo($menucek['menuName']);
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
	