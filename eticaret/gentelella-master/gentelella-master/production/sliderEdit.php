<?php include 'header.php'?>
<?php include '../funcFile/connect.php';?>


<?php

$slidersor=$db->prepare("SELECT * FROM slider where sliderID=:id");
$slidersor->execute(array(
  'id'=> $_GET['sliderID']

));
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);


?>

 <form action="../funcFile/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">



        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           Slider Düzenle 
            <hr>
            <div class="clearfix"></div>

            <div class="container">
            
          
            <input type="text"  name="sliderID"class="form-control-plaintext" id="staticEmail2" disabled value="<?php echo $slidercek['sliderID']; ?>"  class="text-center">
            
              
              <h5>Slider NAME</h5>
              <input type="text" name="sliderName" value=" <?php echo $slidercek['sliderName'];?>" required="">
              <h5>Slider ORder</h5>
              <input type="text" name="sliderOrder" value="<?php echo $slidercek['sliderOrder']; ?>" required="" >
                <h5>Slider LİNK</h5>
              <input type="text"   name="sliderLink" value="<?php slidercek['sliderLink']; ?>" >
                <h5>SLİDER ImageLine</h5>
              <input type="text" name="sliderImageLine" value="<?php echo $slidercek['sliderImageLine'];  ?>" required="">
            
              
              
              <h5>slider STATE</h5>
              <div class="container text-center d-flex items-align-center">
             <select  id="state" class="form-control" style="width:300px;" name="sliderState" required>
               
                  <option value="1"  <?php echo $slidercek['sliderState']== '1' ? 'selected""' : '';?> > Aktif </option>
                  <option value="0" <?php if ($slidercek['sliderState']== 0) { echo 'selected""';} ?>> Pasif </option>
                 
             </select>
           </div>
         </div>
       </div>
       <hr>
                  <button type="submit" name="sliderUpdate"  > Slider Properties Update </button>

    
            
            </div>
              </div>
              </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- /page content -->

      <?php  include 'footer.php'?>
     