<?php include 'header.php'?>
<?php include '../funcFile/connect.php';?>



 <form action="../funcFile/userUpdateIslem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">



        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           Menu Ekleme 
            <hr>
            <div class="clearfix"></div>

            <div class="container">
            
          
            <input type="text"  name="menuID"class="form-control-plaintext" id="staticEmail2" placeholder="MenuID otomaitk atanır"  disabled class="text-center">
            
              
              <h5>MENU NAME</h5>
              <input type="text" name="menuName" placeholder="Menu Adı" required="">
                <h5>MENU DETAİL</h5>
              <input type="text" name="menuDetail" placeholder="Menu Detail" required="">
              <h5>MENU SİRA</h5>
              <input type="text" name="menuSira" placeholder="menu sira"required="" >
              
              <h5>MENU URL</h5>
              <input type="text" disabled name="menuSeoUrl" placeholder="menu URL">
              <h5>MENU STATE</h5>
              <div class="container text-center d-flex items-align-center">
             <select  id="state" class="form-control" style="width:300px;" name="menuState" required>
               
                  <option value="1"> Aktif </option>
                  <option value="0"> Pasif </option>
                 
             </select>
           </div>
         </div>
       </div>
       <hr>
  <button type="submit"  name="menuAdd" > Menu Ekle </button>

    
            
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
     