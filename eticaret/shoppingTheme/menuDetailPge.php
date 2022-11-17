<?php include 'header.php'; 

        $menusor=$db->prepare("SELECT * FROM menu");
        $menucek=$menusor->execute();
        
        $menucek=$menusor->fetch(PDO::FETCH_ASSOC);
    
    ?>
	
    <hr style="width:75%;">
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3" style="padding:20px;">
                <h3>     <i class="fa fa-info-circle ms-3"> </i>  <?php echo $menucek['menuName'];?> </h3>
                    </div>
            </div>
</div>
 <hr>
            <div class="container " style="height:550px; margin-top:75px;">

            <div class="menuDetail">

                 <p>
                        <?php echo $menucek['menuDetail']; ?> 
                 </p>

        </div>
    </div>
	<hr>
	<footer align="center" class="d-flex center bg-black"> 
    <p style="color:orange; "> Powered By</p>
    <img src="images/home/alt.png" style="user-select:none; width:350px; ">
    <i> Web Geliştirme ekibi </i>
</footer>