<?php
include'connect.php';
include '../production/function.php';
ob_start();


if(isset($_POST['logoSend'])) {


    $uploads_dir='production/images/';
    @$tmp_name=$_FILES['settingLogo']["tmp_name"];
    @$name=$_FILES['settingLogo']["name"];

    $bSayi4=rand(20000,32000);
     $PhotoLine=substr($uploads_dir,10)."/".$bSayi4.$name;
            
    @move_uploaded_file($tmp_name, "$uploads_dir/$bSayi4$name");

     $duzenle=$db->prepare("UPDATE ecommerce SET 
    settingLogo=:logo 
    WHERE settingID=0");

    $update=$duzenle->execute(array(
        'logo' => $PhotoLine
    ));
    if($update){
        $PhotoUnlink=$_POST['OldLine'];
        unlink("../../$PhotoUnlink");
        

        Header("Location:../production/allGeneralSettings.php?durum=ok");


    }
    else 
    {

        Header("Location:../production/allGeneralSettings.php?durum=no");


    }
}



?>