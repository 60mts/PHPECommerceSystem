<?php  include 'header.php'?>
<?php  

  include '../funcFile/connect.php';
  $ayarsor=$db->prepare("SELECT *FROM  ecommerce  where settingID=:id");
  $ayarsor->execute(array(
  'id'=>0
  ));

  $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>      <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Elements</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Genel Ayarlar <small
                 <?php 
                 if ($_GET['durum']=="ok") {?>
                    < b style="color:green;"> İşlem başarılı..</>
                 <?php } elseif($_GET['durum']=="no"){ ?>
                  <b style="color:red;"> işlem başarısız... tekrar dene!</b>
                 <?php }?>
                    İşlem durumu</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form  action="../funcFile/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> <i class="fa fa-at"> </i><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="settingFacebook" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['settingFacebook']?>" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> <i class="fa fa-inbox"> </i><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="settingTwitter" value="<?php echo $ayarcek['settingTwitter'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> <i class="fa fa-male"> </i><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="settingInstagram" value="<?php echo $ayarcek['settingInstagram'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> <i class="fa fa-align-left"> </i><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="settingLinkedin" value="<?php echo $ayarcek['settingLinkedin'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> <i class="fa fa-align-justify"> </i><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="settingGitHub" value="<?php echo $ayarcek['settingGitHub'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="settingapiS" class="btn btn-success">Güncelle</button>
                        </div>
                      </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <?php  include 'footer.php'?>