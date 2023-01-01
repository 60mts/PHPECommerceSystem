        <?php  
        include '../funcFile/connect.php';
        include 'function.php';
        $ayarsor=$db->prepare("SELECT *FROM ecommerce where settingID=:id");
        $ayarsor->execute(array(
        'id'=>0
        ));

        $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

        ob_start();
?>
<?php
          $usersor=$db->prepare("SELECT *FROM user where userName=:uname;");
                        
                        $usersor->execute(array(
                        'uname' => $_SESSION['userName']
                        
                      ));

        $say=$usersor->rowCount();
        $usercek=$usersor->fetch(PDO::FETCH_ASSOC);
      if ($say==0) {
  
        header("location:../production/login?durum=izinsiz");
        echo "izinsiz giriş";
        exit;

}


if(!isset($_SESSION['userName']))

{
  header("Location:../production/login");
}


?>
<?php

$usersor=$db->prepare("SELECT * FROM user ");
$usersor->execute();

?>


<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>60MTS ADMİN PANEL</title>
    
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-heart"></i>  <span>60e-MTS </span>
            <h2><?php echo $_SESSION['userNameLastName'];?></h2></a>
            
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix" style="margin-left:80px;">
              <div class="container text-center ">
              <div class="profile_pic">
                <a href="profile">
              <img class="img fluid"src="images/<?php echo $usercek['userPhoto']; ?>"width="60px"; style="user-select: none;">
            </a>
              <div class="profile_info" >
                <br>
                <a href="profile">
                <button type="button" class="btn btn-light" style="border:none;font-size:10px; margin-left:-30px; margin-top:-25px;"><i class="fa fa-edit"></i> Profile Edit</button>
                </a>
              </div>
                <span>Welcome</span>
                <br>
                <h2> <b> <?php echo $_SESSION['userName'];?><i class="fa fa-check" style="color:antiquewhite; font-size:10px;" title="Onaylı Hesap"></i></b>
                </h2>
               <h5 style="color:white;"> <b><?php echo $usercek['userUnvan']; ?> </b></h5> 
            
              </div>
            </div>
          </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
               
                <ul class="nav side-menu">
                  <li><a href="index"><i class="fa fa-home"></i> Home </a>
                  </li>
                  
                  <ul class="nav side-menu">
                  <li><a><i class="fa fa-cogs"></i> Site Settings <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="allGeneralSettings">All Settings</a></li>
                      <li><a href="iletisimSettings">Contact Settings</a></li>
                      <li><a href="settingApi">Api Ayarlar</a></li>
                          <li><a href="socialSetting">Social Settings </a></li>
                          <li><a href="mailSetting">Mail Settings </a></li>
                          <li><a href="hakkimzdaSetting">Hakkımzda Ayarlar </a></li>



                    </ul>
                  </li>
                  <li><a href="userInfo"><i class="fa fa-user"></i>  User  </a>
                  </li>
                   </li>
                    <li><a href="menuS"><i class="fa fa-list"></i> Menu  </a>
                  </li>
                  </li>
                    <li><a href="sliderP"><i class="fa fa-list"></i> Slider Settings  </a>
                  </li>
              </div>
            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings" href="setting">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock" href="lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/<?php echo $usercek['userPhoto'];?>" style="user-select: none;"alt=""><?php echo $usercek['userNameLastName']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="Profile" >

                        Profile   
                    <i class="fa fa-face-smile"> </i></a></li>
                  
                    <li><a href="Help">Help <i class="fa fa-question"> </i></a> </li>
                    <li><a href="logout"> Security Exit <i class="fa fa-person-to-door"></i> </a></li>
                  </ul>
                </li>
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->