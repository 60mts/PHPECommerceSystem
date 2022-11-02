<?php include 'header.php'?>
<?php include '../funcFile/connect.php';?>
<?php

$usersor=$db->prepare("SELECT * FROM user where userID=:id");
$usersor->execute(array(
  'id'=> $_GET['userID']

));
$usercek=$usersor->fetch(PDO::FETCH_ASSOC);


?>

 <form action="../funcFile/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">



<?php 

$uTime=explode(" " , $usercek['userTime']);

?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           Kullanıcı Düzenle 
            <hr>
            <div class="clearfix"></div>
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
            <div class="container text-center">
             
                 <h5>USER CREATED ACCOUNT</h5>
            <input type="date"  disabled  class="form-control-plaintext" id="staticEmail2" value="<?php echo $uTime[0]; ?>"  class="text-center">  
             <input type="time" disabled  class="form-control-plaintext" id="staticEmail2" value="<?php echo $uTime[1]; ?>" disa class="text-center"> 
        
          
            <input type="hidden"  name="userID"class="form-control-plaintext" id="staticEmail2" value="<?php echo $usercek['userID']; ?>"  class="text-center">
            
               <h5 >USER NATIANOLY ID</h5>
              <input type="text" name="userNationalyID" value="<?php echo $usercek['userNationalyID']; ?>" required="">
              <h5>USER NAME</h5>
              <input type="text" name="userName" value="<?php echo $usercek['userName'];?>" required="">
                <h5>USER LONG NAME</h5>
              <input type="text" name="userNameLastName" value="<?php echo $usercek['userNameLastName'];  ?>" required="">
              <h5>USER PASSWORD</h5>
              <input type="password" name="userPassword" value="<?php echo $usercek['userPassword'] ?>" required="" readonly>
              
              <h5>USER MAİL</h5>
              <input type="text" disabled name="userMail" value="<?php echo $usercek['userMail'] ?>" >
              <h5>USER STATE</h5>
             <select  id="state" class="container" style="width:300px; "name="userState" required>
               
                  <option value="1"  <?php echo $usercek['userState']== '1' ? 'selected""' : '';?> > Aktif </option>
                  <option value="0" <?php if ($usercek['userState']== 0) { echo 'selected""';} ?>> Pasif </option>
                 
             </select>
         </div>
       </div>
       <hr>
  <button type="submit" name="userSave" id="userSave" > UPDATE </button>

    
            
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
     