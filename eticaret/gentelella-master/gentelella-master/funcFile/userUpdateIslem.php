<?php

   if (isset($_POST['menuSave'])) {
                
                $menuID=$_POST['menuID'];
                
                $ayarkaydet=$db->prepare("UPDATE  menu SET 
                     menuName=:menuName,
                     menuSira=:menuSira,
                     menuUrl=:menuUrl,
                     menuDetail=:menuDetail,
                     menuState=:menuState
                     WHERE menuID={$_POST['menuID']}");
                }
                $update=$ayarkaydet->execute(array(
                 'menuName'=>$_POST['menuName'],
                 'menuSira'=> $_POST['menuSira'],
                 'menuUrl'=>$_POST['menuUrl'],
                 'menuDetail'=>$_POST['menuDetail'],
                 'menuState'=>$_POST['menuState'],
                 'menuSeoUrl'=>$menuSeoUrl
 
                ));
            
                 if ($update) {
                     
                     Header("Location:../production/menuEdit.php?menuID=$menuID&durum=ok");
 
 
                     } else{
                         Header("Location:../production/menuEdit.php?menuID=$menuID&durum=no");
 
                 }
               
                 ?>