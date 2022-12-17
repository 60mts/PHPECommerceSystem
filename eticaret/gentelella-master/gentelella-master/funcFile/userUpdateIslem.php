<?php 
 include 'connect.php';

 ob_start();
 include '../production/function.php';





 if(isset($_POST['menuAdd']))
 {
   $menuSeoUrl=seo($_POST['menuName']);

   $update=$ayarkaydet=$db->prepare("INSERT INTO menu SET

               menuName=:menuName,
               menuDetail=:menuDetail,
            
               menuSeoUrl=:menuSeoUrl,
               menuSira=:menuSira,
               menuState=:menuState"
   );
   $insert=$ayarkaydet->execute(array(

       'menuName'=>$_POST['menuName'],
       'menuDetail'=> $_POST['menuDetail'],
       'menuSeoUrl'=>$menuSeoUrl,
       'menuSira'=> $_POST['menuSira'],
       'menuState'=>$_POST['menuState']

   ));

   if($insert){

       Header("Location:../production/menuS.php?durum=ok");

   }
   else {

       Header("Location:../production/menuS.php?durum=no");
   }


 }
        

            ?>