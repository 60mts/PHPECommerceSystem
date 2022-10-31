<?php include 'header.php'?>

<?php

$usersor=$db->prepare("SELECT * FROM user where userID=:id");
$usersor->execute(array(
  'id'=> $_GET['userID']

));
$usercek=$usersor->fetch(PDO::FETCH_ASSOC);


?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           Kullanıcı Düzenle 
            <hr>
            <div class="clearfix"></div>

            <div class="container text-center">
             <form action="">
   
              <h5>USER ID</h5>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="<?php echo $usercek['userID']; ?>" disabled class="text-center">
               <h5 >USER NATIANOLY ID</h5>
              <input type="text" name="userNationalyID" disabled value="<?php echo $usercek['userNationalyID']; ?>" required="">
              <h5>USER NAME</h5>
              <input type="text" name="userName" value="<?php echo $usercek['userName'];?>" required="">
                <h5>USER LONG NAME</h5>
              <input type="text" name="userNameLastName" value="<?php echo $usercek['userNameLastName'];  ?>" required="">
              <h5>USER PASSWORD</h5>
              <input type="password" name="userPassword" value="<?php echo $usercek['userPassword'] ?>" required="" readonly>



<br>
<br>
<button type="button" id="userSaved"class="btn btn-success" width="80"> <i class="fa fa-check"> </i> KAYDET</button>
</form>

            </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

      <?php  include 'footer.php'?>
     