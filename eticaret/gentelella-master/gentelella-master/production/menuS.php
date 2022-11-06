<?php include 'header.php'?>
<?php include '../funcFile/connect.php';


$menusor=$db->prepare("SELECT * FROM menu");
$menusor->execute();


?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div align="right" class="">
            <a href="menuAdd.php"><button class="btn btn-danger btn-xs">  Yeni Ekle </button></a>
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
            <div class="clearfix"></div>

            <div class="row">

   <div class="container">


    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsice nowrap"cellspacing="0"width="100%">
  
  <thead>
  <tr>
    <th>MENU ID</th>
    <th>MENU DETAİL</th>
   <th>MENU SİRA</th>
   <th> MENU LİNKİ</th>
   <th>MENU DURUM</th>
    
    <th>MENU İŞLEMLERİ</th>

  </tr>
 
  <tbody>

    <?php 
     
    while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) { ?>
     
    <tr>
    <td>  <?php echo $menucek['menuID']; ?>  </td>      
    <td>   <?php echo $menucek['menuDetail']; ?>  </td>
    <td>  <?php echo $menucek['menuSira']; ?>   </td>
      <td>  <?php echo $menucek['menuUrl']; ?> </td>
      <td>  

          <?php 

            if($menucek['menuState']==1){ ?>

              <button  class="btn btn-succes btn-xs"> AKTİF </button>

              <?php } else { ?>
                <button class="btn btn-danger btn-xs">PASİF </button>

              <?php } ?>

       </td>
    <td>
      <button class="btn btn-outline-inverse" style=""> <i class="fa fa-edit"></i> <a href="menuEdit?menuID=<?php echo $menucek['menuID']; ?>">Düzenle</a> </button>  
      <a href="../funcFile/islem.php?menuID=<?php echo $menucek['menuID'];?>&menuDelete=ok"><button class="btn btn-outline-inverse"> <i class="fa fa-trash"></i> Sil</button> </a>
     
      </td>

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
        </div>
        <!-- /page content -->

      <?php  include 'footer.php'?>
     
