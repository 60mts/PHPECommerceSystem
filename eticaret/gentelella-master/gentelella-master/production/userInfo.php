<?php include 'header.php'?>

<?php

$usersor=$db->prepare("SELECT * FROM user");
$usersor->execute();


?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <h3 class="text-center"><b> Kullanıcı İşlemleri</b></h3>

            <hr>
          </div>

            <div class="container">


    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsice nowrap"cellspacing="0"width="100%">
  
  <thead>
  <tr>
    <th>UserID</th>
    <th>UserNationlyID</th>
    <th>UserName</th>
    <th>UserPassword</th>
    <th>UserMail</th>
    <th>UserAccountDay</th>
    <th>Userİşlemleri</th>

  </tr>
 
  <tbody>

    <?php 

    while($usercek=$usersor->fetch(PDO::FETCH_ASSOC)) { ?>
 
    <tr>
    <td>  <?php echo $usercek['userID']; ?>  </td>      
    <td>   <?php echo $usercek['userNationalyID']; ?>  </td>
    <td>  <?php echo $usercek['userName']; ?>   </td>
    <td>   <?php echo $usercek['userPassword']; ?>  </td>
    <td>  <?php echo $usercek['userMail']; ?>   </td>
    <td>   <?php echo $usercek['userTime']; ?>  </td>
    <td>
      <button class="btn btn-outline-inverse" style=""> <i class="fa fa-edit"></i> <a href="userEdit?userID=<?php echo $usercek['userID']; ?>">Düzenle</a> </button>  
      <button class="btn btn-outline-inverse"> <i class="fa fa-trash"></i> Sil</button> 
      <button class="btn btn-outline-inverse"> <i class="fa fa-photo"></i> Değiştir</button> 
      <button class="btn btn-outline-inverse"> <i class="fa fa-edit"></i> Düzenle</button> 
      <button class="btn btn-outline-inverse"> <i class="fa fa-edit"></i> Düzenle</button> </td>

    </tr>
  
  <?php } ?>

</tbody>

</thead>


</table>
            </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

      <?php  include 'footer.php'?>
