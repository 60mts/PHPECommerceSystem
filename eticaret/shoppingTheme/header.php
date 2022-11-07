
<!DOCTYPE html>
<?php include_once '../gentelella-master/gentelella-master/funcFile/connect.php';
$ayarsor=$db->prepare("SELECT * FROM ecommerce where settingID=:id");
$ayarsor->execute(array(
'id'=>0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


?>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title id="settingTitle">  <?php echo  $ayarcek['settingTitle']?> </title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!--bootstrap css-->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!--animate css-->
      <link rel="stylesheet" href="css/animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/bootstrap-select.min.css">
      <link rel="stylesheet" href="css/slick.min.css">
      <!--responsive css-->
      <link rel="stylesheet" href="css/responsive.css">
   </head>
   <body>
      <header id="header" class="top-head">
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-12 left-rs">
                     <div class="navbar-header">
                        <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        </button>
                        <a href="index.php" class="navbar-brand"><img src="images/logo.png" alt="" /></a>
                     </div>
                     <form class="navbar-form navbar-left web-sh">
                        <div class="form">
                           <input type="text" class="form-control" placeholder="Search for products or companies">
                        </div>
                     </form>
                  </div>
                  <div class="col-md-8 col-sm-12">
                     <div class="right-nav">
                        <div class="login-sr">
                           <div class="login-signup">
                              <ul>
                                 <li><a href="#">Login</a></li>
                                 <li><a class="custom-b" href="#">Sign up</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="help-r hidden-xs">
                           <div class="help-box">
                              <ul>
                              
                              </ul>
                           </div>
                        </div>
                        <div class="nav-b hidden-xs">
                           <div class="nav-box">
                              <ul>
                           <?php    
                           $menusor=$db->prepare("SELECT * FROM menu");
                           $menusor->execute();
                           
                           
                           while($ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC))  {?>

                           <li><a href="<?php echo $ayarcek['menuLink']; ?>"><?php echo $ayarcek['menuName']; ?></a></li>



                        <?php  }?>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--/.container-fluid --> 
         </nav>
      </header>
      <!-- Modal -->
      <div class="modal fade lug" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Change</h4>
               </div>
               <div class="modal-body">
                  <ul>
                  li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div id="sidebar" class="top-nav">
         <ul id="sidebar-nav" class="sidebar-nav">
            <li><a href="#">Help</a></li>
            <li><a href="howitworks.html">How it works</a></li>
            <li><a href="#">chamb for Business</a></li>
         </ul>
      </div>
      <div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                  <div class="find-box">
                     <h1>Find your next product or<br>business partner here.</h1>
                     <h4>It has never been easier.</h4>
                     <div class="product-sh">
                        <div class="col-sm-6">
                           <div class="form-sh">
                              <input type="text" placeholder="Search something you love" >
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="form-sh">
                              <select class="selectpicker">
                                 <option>Textiles</option>
                                 <option>Furniture</option>
                                 <option>Leather</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="form-sh"> <a class="btn" href="#">Search</a> </div>
                        </div>