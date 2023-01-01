<?php include 'header.php'?>
<?php include '../funcFile/connect.php';


$slidersor=$db->prepare("SELECT * FROM slider");
$slidersor->execute();


?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div align="right" class="">
            <a href="sliderAdd"><button class="btn btn-danger btn-xs">  Yeni Ekle </button></a>
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
    <th>SLİDER ID</th>
    <th>SLİDER DETAİL</th>
   <th>SLİDER ORDER</th>
   <th> SLİDER LİNKİ</th>
   <th>SLİDER STATE</th>
    
    <th>SLİDER PROCESS</th>

  </tr>
 
  <tbody>

    <?php 
     
    while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) { ?>
     
    <tr>
    <td>  <?php echo $slidercek['sliderID']; ?>  </td>      
    <td>   <?php echo $slidercek['sliderName']; ?>  </td>
    <td>  <?php echo $slidercek['sliderOrder']; ?>   </td>
      <td><i class="fa fa-link"></i>  <?php echo $slidercek['sliderLink']; ?> </td>
      <td>  

          <?php 

            if($slidercek['sliderState']==1){ ?>

              <button  class="btn btn-succes btn-xs"> AKTİF </button>

              <?php } else { ?>
                <button class="btn btn-danger btn-xs">PASİF </button>

              <?php } ?>

       </td>
    <td>
      <button class="btn btn-outline-inverse" style=""> <i class="fa fa-edit"></i> <a href="sliderEdit?sliderID=<?php echo $slidercek['sliderID']; ?>">Düzenle</a> </button>  
      <a href="../funcFile/islem.php?sliderID=<?php echo $slidercek['sliderID'];?>&sliderDelete=ok"><button class="btn btn-outline-inverse"> <i class="fa fa-trash"></i> Sil</button> </a>
     
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
     
