<?php include 'header.php' 

  ?>
  <!-- page content -->
  <div class="right_col" role="main">
          <div class="">
        Logo ekle 
            <hr>
            <div class="clearfix">
            <div align="right" class="">
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
            </div>

          </div>
            <div class="row">
                <form action="../funcFile/photoUpload.php" method="POST" enctype="multipart/form-data">


            
                Geçerli Logo

                <input type="file" id="LogoSec" name="settingLogo">
                <input type="hidden" name="OldLine" value="<?php echo $ayarcek['settingLogo'];?>"> 
                <?php if(strlen($ayarcek['settingLogo']>0)) {?>
                <img width="200" src="<?php echo $ayarcek['settingLogo'];?>">
                <?php } else{?>
                <img width="200" src="images/NoPhoto.jpg">
                <?php } ?>
            
          
              



            <button type="submit" id="logoSend" name="logoSend">Yükle</button>
            </div>  
              </form>
              </div>
                </div>



              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<?php include 'footer.php' ?>