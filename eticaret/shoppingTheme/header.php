<?php include_once '../gentelella-master/gentelella-master/funcFile/connect.php';

include '../gentelella-master/gentelella-master/production/function.php';

?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<link href="index.css" rel="stylesheet">
    <meta charset="uft-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1 user-scalable=0;">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Herşeyin BEST-i Burada!</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="index.css" rel="stylesheet">
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
    <link rel="shortcut icon" href="images/home/icon2.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<link href="/dist/output.css" rel="stylesheet">

</head><!--/head-->

<body>
	<header id="header"  style="width:100%;">
	<!--<div style="  float:left;">
			
			
						Siparişlerim |
				
					Best Fiyat, Best Teklif | 
				
					Best Yurt Dışından | 

					BEST Premium | 
				
					BEST Satıcı ol
				
</div>-->
	<div class="container" style="width:100%; height:250x; background-color:#D6E4E5; ">
	<div class="row " style="padding:50px;">
	<div class="col" >
		<a href="index">
	<img src="images/home/bestiburada.png" align="left" width="200">
</a>
	</div>
	<div class="col md-center hidden-sm hidden-xs">

	<div class="" align="center" >
	<input type="center" placeholder="Ne lazımsa ara.." style="padding:20px; border-radius:3px; border:2px solid orange; outline:none; width:350px;"><button type="button" style="background-color:transparent; border:none; margin-left:-40px;"> <i class="bi bi-search" style="background-color:transpant;"></i></button>
</div>

	</div>

	<div clas="col" style="margin-top:-60px" >
	<a href="cart">
	<button type="button" class="btn btn-outline-secondary hidden-xs" style="width:130px; height:70px; border:3px solid gray; float:right; background-color:gray; margin-left:20px; color:white;"> <i class="bi bi-basket" style=""></i>
			<h4 style="">Sepetim  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    0  <span class="visually-hidden"></h4>
	
		</button>
	</a>
		<a href="login">
		<button type="button" class="btn btn-outline-secondary" style="width:130px; height:70px; border:3px solid gray;padding:15px; float:right;"> <i class="bi bi-person" style="float:left; "></i>
			<h4 style="margin-top:-2px; font-size:15px;">Giriş Yap</h4>
			<h6 style="font-size:10px;">veya üye ol</h6>
			<i class="bi bi-chevron-compact-down" style="float:right; font-size:15px; margin-top:-25px;"></i>
		</button>
	</a>
	</div>
</div>
	</div>
	<div class="colors" style="width:100%;">
		<div class="container hidden-sm hidden-xs" style="width:100%;">
			<div class="row">
				<div class="col" style="width:350px; height:10px; background-color:#B2B2B2;">


				
				<div class="col" style="margin-left:350px;width:350px; height:10px; background-color:#3C4048;">

				<div class="col" style="margin-left:350px;width:350px; height:10px; background-color:#FCE700;">
				<div class="col" style="margin-left:350px;width:350px; height:10px; background-color:#DC5F00;">
				<div class="col" style="margin-left:350px;width:116px; height:10px; background-color:#FF731D;">

</div>
</div>
</div>
</div>
</div>
</div>
</div>
			</div>
	
	</div>
	</div>

		</div>
	<!--/header_top-->
	
<div clas="navbar" style="padding:20px; background-color:#D8D8D8;">
<ul class="nav nav-pills">
<?php  $menusor=$db->prepare("SELECT * FROM menu where menuState=:durum order by menuSira ASC limit 5");
									$menusor->execute(array(
										'durum' => 1

									));
									while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {
										?>
										
										<li class="nav-item"><a href="
											<?php
											if(!empty($menucek['menuUrl'])){

												echo $menucek['menuUrl'];

											}
											else{

												echo "sayfa-".seo($menucek['menuName']);
											}
											
												?>
											
											"><?php echo $menucek['menuName']; ?> </a></li>
                                
									<?php } ?>
  
  
	</div>


	
		
	<!--<div class="header-bottom text-center  hidden-sm "align="center" style="background-color:#EEEEEE; ">

<div>-->

						<!--<div class="navbar-header  hidden-sm" style="">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Responsive Menu</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>-->
						
						
				
	</header>
		