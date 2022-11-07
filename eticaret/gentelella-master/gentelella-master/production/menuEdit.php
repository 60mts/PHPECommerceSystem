<?php include 'header.php'?>
<?php include '../funcFile/connect.php';?>


<?php

$menusor=$db->prepare("SELECT * FROM menu where menuID=:id");
$menusor->execute(array(
  'id'=> $_GET['menuID']

));
$menucek=$menusor->fetch(PDO::FETCH_ASSOC);


?>

 <form action="../funcFile/userUpdateIslem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">



        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           Menu Düzenle 
            <hr>
            <div class="clearfix"></div>

            <div class="container">
            
          
            <input type="text"  name="menuID"class="form-control-plaintext" id="staticEmail2" disabled value="<?php echo $menucek['menuID']; ?>"  class="text-center">
            
              
              <h5>MENU NAME</h5>
              <input type="text" name="menuName" value="<?php echo $menucek['menuName'];?>" required="">
                <h5>MENU DETAİL</h5>
              <input type="text" name="menuDetail" value="<?php echo $menucek['menuDetail'];  ?>" required="">
              <h5>MENU SİRA</h5>
              <input type="text" name="menuSira" value="<?php echo $menucek['menuSira']; ?>" required="" >
              
              <h5>MENU URL</h5>
              <input type="text"  name="menuUrl" value="<?php echo $menucek['menuUrl']; ?>" >
              <h5>MENU STATE</h5>
              <div class="container text-center d-flex items-align-center">
             <select  id="state" class="form-control" style="width:300px;" name="menuState" required>
               
                  <option value="1"  <?php echo $menucek['menuState']== '1' ? 'selected""' : '';?> > Aktif </option>
                  <option value="0" <?php if ($menucek['menuState']== 0) { echo 'selected""';} ?>> Pasif </option>
                 
             </select>
           </div>
         </div>
       </div>
       <hr>
  <button type="submit" formaction="../funcFile/islem.php" role="button"class="btn btn-success" name="menuUpdate" > Update </button>

    
            
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
     