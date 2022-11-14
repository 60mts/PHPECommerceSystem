<?php include 'header.php'; 

    

        $menusor=$db->prepare("SELECT * FROM menu");
        $menucek=$menusor->execute();
        
        $menucek=$menusor->fetch(PDO::FETCH_ASSOC);
    
    ?>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
                    <h3> <?php echo $menucek['menuName'];?></h3>
                    </div>
            </div>
</div>

            <div class="container " style="height:550px;">

            <div class="menuDetail">

        </div>
    </div>
	<hr>
	<footer align="center" class="d-flex center"> 
    <b style="color:gray; user-select:none;"> Powered By</b>
    <img src="images/home/alt.png" style="user-select:none; width:250px; ">

</footer>