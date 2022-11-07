<?php 
 include 'connect.php';
 session_start();
 ob_start();
 include '../production/function.php';



$menucek=$menusor->fetch(PDO::FETCH_ASSOC);

 if(isset($_POST['menuAdd']))
 {
   $menuSeoUrl=seo('menuName');

   $update=$ayarkaydet=$db->prepare("INSERT INTO menu SET

               menuName=:menuName,
               menuDetail=:menuDetail,
               menuUrl=:menuUrl,
               menuSeoUrl=:menuSeoUrl,
               menuSira=:menuSira,
               menuState=:menuState"
   );
   $insert=$ayarkaydet->execute(array(

       'menuName'=>$_POST['menuName'],
       'menuDetail'=> $_POST['menuDetail'],
       'menuUrl'=> $_POST['menuUrl'],
       'menuSeoUrl'=>'menuSeoUrl',
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