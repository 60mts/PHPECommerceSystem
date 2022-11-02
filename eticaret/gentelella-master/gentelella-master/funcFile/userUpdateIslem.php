<?php


         if(isset($_POST['userSave'])){

                $userID=$_POST['userID'];


       $ayarkaydet=$db->prepare("UPDATE user SET 
         userNameLastName=:userNameLastName,
         userNationalyID=:userNationalyID,
         userState=:userState
         WHERE userID={$_POST['userID']}");

      $update=$ayarkaydet->execute(array(
                   
                    'userNameLastName'=> $_POST['userNameLastName'],
                    'userNationalyID'=>$_POST['userNationalyID'],
                    'userState'=>$_POST['userState']
                 
                    )); 
            
                 if($update){


                    Header("Location:../production/userEdit?userID=$userID&durum=ok");

                 
                 }else
                 {
                    Header("Location:../production/userEdit?userID=$userID&durum=no");
                 }
      }


  ?>