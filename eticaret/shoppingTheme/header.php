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
    <title> .::BB::. BESTi BURADA</title>
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
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/alt.png" alt="" style="width:250px; user-select:none;" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
							
								</ul>
							</div>
						
						</div>
					</div>
                    <div class="col-sm-8" style="margin-top:20px; color:white;">
						<div class="shop-menu pull-right">
						
						<ul class="nav navbar-nav " >
								<button type="button" class="btn btn-outline"style="margin-left:-200px; color:white;"> <a href="cart" style="color:orange;"><i class="bi bi-bag-fill ms-3 fs-22" style="font-size:30px;padding:10px "></i>
							
							<h4 style="float:right;">Sepetim</h4><br>
						
							
							</a></button>
							</ul>
							<ul class="nav navbar-nav ">
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
					<div class="col-sm-9">


						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left" style="margin-top:20px;">
							<ul class="nav navbar-nav collapse navbar-collapse">

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
											
											"><?php echo $menucek['menuName']; ?> </li></a></b>
                                
									<?php } ?>
							
							</ul>
						</div>
					</div>
					
					
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	