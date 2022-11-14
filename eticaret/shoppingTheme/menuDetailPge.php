<?php include 'header.php'; ?>
	<?php include '../funcFile/connect.php';
    $menusor=$db->prepare("SELECT * FROM menu");
    $menucek=$menusor->execute();
    
    
    ?>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
                    MENU PAGE
                    </div>
            </div>
</div>

            <div class="container " style="height:550px;">

            <div class="menuDetail">

    <h3> <?php echo $menucek['menuName'];?></h3>

            </div>
    </div>
	
	<?php include 'footer.php';?>