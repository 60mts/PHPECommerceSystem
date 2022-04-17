            <?php include 'header.php'; ?>

            <?php include '../funcFile/connect.php';
$hakkimc = $db->prepare("SELECT *FROM hakkimizda where aboutID=:id");
$hakkimc->execute(array(
  'id' => 0,
));
$hakkimsor = $hakkimc->fetch(PDO::FETCH_ASSOC); ?>

        <!-- page content -->
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
                    <h2>Hakkımızda Ayarları <small
                 <?php

if ($_GET['durum'] == "ok") {
?>
                      <b b style="color:green;"> İşlem başarılı..</b>
                    <?php
}
elseif ($_GET['durum'] == "no") { ?>
                      <b b style="color:red;"> işlem başarısız... tekrar dene!</b>
                 <?php

}
?>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> <i class="fa fa-phone"> </i><span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="aboutBaslik" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $hakkimsor['aboutBaslik']; ?>" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik <span class="required">*</span>
                         </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                     </div>
                        <textarea id="aboutDetail" value="<?php echo $hakkimsor['aboutDetail']; ?>" >


                         </textarea>
                     <div class="form-group"></div>
                                                </div>


                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> <i class="fa fa-mail-reply"> </i> <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="aboutImage" value="<?php echo $hakkimsor['aboutImage']; ?>"required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><i class="fa fa-location-arrow"> </i> <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="aboutCareerWorkBaslik" value="<?php echo $hakkimsor['aboutCareerWorkBaslik']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> <i class="fa fa-phone"> </i><span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="aboutWorkCareer" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $hakkimsor['aboutWorkCareer']; ?>" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> <i class="fa fa-phone"> </i><span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="contactBaslik" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $hakkimsor['contactBaslik']; ?>" >
                        </div>
                      </div>
                      </div>
                      <div class="form-group">

                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align ="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="hakkimgonder" class="btn btn-success">Güncelle</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            <?php include 'footer.php'; ?>