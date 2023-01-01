<?php include 'header.php'?>
<?php include '../funcFile/connect.php';?>



 <form action="../funcFile/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">



        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           Menu Ekleme 
            <hr>
            <div class="clearfix"></div>

            <div class="container">
            
          
            <input type="text"  name="sliderID"class="form-control-plaintext" id="staticEmail2" placeholder="SliderID otomaitk atanır"  disabled class="text-center">
            
              
              <h5>Slider NAME</h5>
              <input type="text" name="sliderName" placeholder="Slider Adı" required="">
                <h5>Slider DETAİL</h5>
              <input type="text" name="sliderImageLine" placeholder="Slider Detail" required="">
              <h5>Slider SİRA</h5>
              <input type="text" name="sliderOrder" placeholder="Slider sira"required="" >
              
              <h5>Slider URL</h5>
              <input type="text" disabled name="sliderLink" placeholder="Slider URL">
              <h5>Slider STATE</h5>
              <div class="container text-center d-flex items-align-center">
             <select  id="state" class="form-control" style="width:300px;" name="sliderState" required>
               
                  <option value="1"> Active </option>
                  <option value="0"> Passive </option>
                 
             </select>
           </div>
         </div>
       </div>
       <hr>
  <button type="submit"  name="sliderAdd" > Slider Ekle </button>

    
            
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
     