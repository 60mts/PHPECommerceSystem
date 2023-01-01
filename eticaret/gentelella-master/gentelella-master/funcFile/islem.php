<?php 
    include 'connect.php';
    
    include '../production/function.php';
    
    
    ob_start();




$usersor=$db->prepare("SELECT * FROM user where userName=:longName and userPhoto=:uphoto");
        $usersor->execute(array(

      'longName' => $_SESSION['userName'],
      'uphoto' => $_SESSION['userPhoto']

        ));


    $usercek=$usersor->fetch(PDO::FETCH_ASSOC);


    if(isset($_POST['genelSettingSave']))
    {
        $ayarkaydet=$db->prepare("UPDATE ecommerce SET
        
        settingTitle=:settingTitle,
        settingDescription=:settingDescription,
        setttingKeywords=:setttingKeywords,
        settingAuthor=:settingAuthor
        WHERE settingID=0
        ");
        $update=$ayarkaydet->execute(array(
            'settingTitle'=>$_POST['settingTitle'],
            'settingDescription'=>$_POST['settingDescription'],
            'setttingKeywords'=>$_POST['setttingKeywords'],
            'settingAuthor'=>$_POST['settingAuthor']
        ));
        if($update)
        {
            header("location:../production/genel-settings.php?durum=ok");
        }
            else{
            header("location:../production/genel-settings.php?durum=no");
            }
        }
        
        if(isset($_POST['concatSettingUpdate']))
        {
            $ayarkaydet=$db->prepare("UPDATE ecommerce SET  
                 settingPhoneNumber=:settingPhoneNumber,
                 settingGSM=:settingGSM,
                 settingMail=:settingMail,
                 settingAdress=:settingAdress,
                 settingMesai=:settingMesai,
                 settingMaps=:settingMaps
                 WHERE settingID=0  
            ");
            $update=$ayarkaydet->execute(array(
                'settingPhoneNumber'=>$_POST['settingPhoneNumber'],
                'settingGSM'=>$_POST['settingGSM'],
                'settingMail'=>$_POST['settingMail'],
                'settingAdress'=>$_POST['settingAdress'],
                'settingMesai'=>$_POST['settingMesai'],
                'settingMaps'=>$_POST['settingMaps']
            ));
            if($update)
            {
                header("location:../production/iletisimSettings.php?durum=ok");
            }
                else{
                header("location:../production/iletisimSettings.php?durum=no");
                }
            }
            if(isset($_POST['settingapiS']))
            {
                $ayarkaydet=$db->prepare("UPDATE ecommerce SET
                settingAnalystyc=:settingAnalystyc,
                settingZopim=:settingZopim,
                WHERE settingID=1  
                ");-
                $update=$ayarkaydet->execute(array(
                    'settingAnalystyc'=>$_POST['settingAnalystyc'],
                    'settingZopim'=>$_POST['settingZopim']
                ));
                if($update)
                {
                    header("location:../production/settingApi.php?durum=ok");
                }
                    else{
                    header("location:../production/settingApi.php?durum=no");
                    }
                }
                
                if(isset($_POST['socialUpdateB']))
    {
        $ayarkaydet=$db->prepare("UPDATE ecommerce SET
        
        settingFacebook=:settingFacebook,
        settingTwitter=:settingTwitter,
        settingInstagram=:settingInstagram,
        settingLinkedin=:settingLinkedin,
        settingGitHub=:settingGitHub


        WHERE settingID=0
        ");
        $update=$ayarkaydet->execute(array(
            'settingFacebook'=>$_POST['settingFacebook'],
            'settingTwitter'=>$_POST['settingTwitter'],
            'settingInstagram'=>$_POST['settingInstagram'],
            'settingLinkedin'=>$_POST['settingLinkedin'],
            'settingGitHub'=>$_POST['settingGitHub']

        ));
        if($update)
        {
            header("location:../production/socialSetting.php?durum=ok");
        }
            else{
            header("location:../production/socialSetting.php?durum=no");
            }
        }
        if(isset($_POST['socialUpdateB']))
        {
            $ayarkaydet=$db->prepare("UPDATE ecommerce SET
            
            settingFacebook=:settingFacebook,
            settingTwitter=:settingTwitter,
            settingInstagram=:settingInstagram,
            settingLinkedin=:settingLinkedin,
            settingGitHub=:settingGitHub
        
        
            WHERE settingID=0
            ");
            $update=$ayarkaydet->execute(array(
                'settingFacebook'=>$_POST['settingFacebook'],
                'settingTwitter'=>$_POST['settingTwitter'],
                'settingInstagram'=>$_POST['settingInstagram'],
                'settingLinkedin'=>$_POST['settingLinkedin'],
                'settingGitHub'=>$_POST['settingGitHub']
        
            ));
            if($update)
            {
                header("location:../production/mailSetting.php?durum=ok");
            }
                else{
                header("location:../production/mailSetting.php?durum=no");
                }
            }
           
             if(isset($_POST['socialUpdateB'])){
                
                $ayarkaydet=$db->prepare("UPDATE ecommerce SET
            
            settingFacebook=:settingFacebook,
            settingTwitter=:settingTwitter,
            settingInstagram=:settingInstagram,
            settingLinkedin=:settingLinkedin,
            settingGitHub=:settingGitHub
        
        
            WHERE settingID=0
            ");
            $update=$ayarkaydet->execute(array(
                'settingFacebook'=>$_POST['settingFacebook'],
                'settingTwitter'=>$_POST['settingTwitter'],
                'settingInstagram'=>$_POST['settingInstagram'],
                'settingLinkedin'=>$_POST['settingLinkedin'],
                'settingGitHub'=>$_POST['settingGitHub']
        
            ));
            if($update)
            {
                header("location:../production/mailSetting.php?durum=ok");
            }
                else{
                header("location:../production/mailSetting.php?durum=no");
                }
            }
           
            if(isset($_POST['hakkimgonder']))
            {
                $ayarkaydet=$db->prepare("UPDATE about SET
                
                aboutBaslik=:aboutBaslik,
                aboutID=:aboutID,
                aboutDetail=:aboutDetail,
                aboutImage=:aboutImage,
                aboutCareerWorkBaslik=:aboutCareerWorkBaslik,
                aboutWorkCareer=:aboutWorkCareer,
                contactBaslik=:contactBaslik,
                contactIcerk=:contactIcerk

                WHERE aboutID=1
                ");
                $update=$ayarkaydet->execute(array(
                    'aboutBaslik'=>$_POST['aboutBaslik'],
                    'aboutDetail'=>$_POST['aboutDetail'],
                    'aboutImage'=>$_POST['aboutImage'],
                    'aboutCareerWorkBaslik'=>$_POST['aboutCareerWorkBaslik'],
                    'aboutWorkCareer'=>$_POST['aboutWorkCareer'],
                    'contactBaslik'=>$_POST['contactBaslik'],
                    'contactIcerk'=>$_POST['contactIcerk'],
                    
            
                ));
            }
                if($update)
                {
                    header("location:../production/hakkimzdaSetting.php?durum=ok");
                }
                    else{
                    header("location:../production/hakkimzdaSetting.php?durum=no");
                    }
               
                if(isset($_POST['loginButton'])){

                    $userName=$_POST['userName'];
                    $userPassword=md5($_POST['userPassword']);
                    

                    $usersor=$db->prepare("SELECT *FROM user where userName=:uname and userPassword=:upassword and userYetki=:yetki");
                    
                    $usersor->execute(array(
                    'uname' => $userName,
                    'upassword' => $userPassword,
                    'yetki' => 5
                ));
                    
                 echo $say=$usersor->rowCount();
                   
                    if($say == 1) 
                    {

                    $_SESSION['userName']=$userName;   

                    header("location:../production/index.php");
                    exit;

                    } else {
                    header("location:../production/login.php?durum=no");
                        exit;
                    }
                }
    ?>           

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

                if($_GET['userDelete']=="ok"){

                $userDelete=$db->prepare("DELETE From user where userID=:id");
                $control=$userDelete->execute(array(
                    'id'=>$_GET['userID']
                ));

                if($control){


                    Header("Location:../production/userInfo.php?userDelete=ok");
                }
                else {


                    Header("Location:../production/userInfo.php?userDelete=no");

                }
                        
            } 
            if($_GET['menuDelete']=="ok"){
                $menuDelete=$db->prepare("DELETE FROM menu WHERE menuID=:id");
            $control=$userDelete->execute(array(
                'id'=>$_GET['menuID']
            ));
               if($control){


                    Header("Location:../production/menuS.php?menuDelete=ok");
                }
                else {


                    Header("Location:../production/menuS.php?menuDelete=no");

                }

            }
                                
 if (isset($_POST['menuUpdate'])) {
                         
    $menuID=$_POST['menuID'];

$ayarkaydet=$db->prepare("UPDATE menu SET 
     menuName=:menuName,
     menuSira=:menuSira,
     menuUrl=:menuUrl,
     menuDetail=:menuDetail,
     menuState=:menuState
     where menuID={$_POST['menuID']}");

$update=$ayarkaydet->execute(array(
 'menuName'=>$_POST['menuName'],
 'menuSira'=> $_POST['menuSira'],
 'menuUrl'=>$_POST['menuUrl'],
 'menuDetail'=>$_POST['menuDetail'],
 'menuState'=>$_POST['menuState'],


));
}
 if ($update) {
     
     Header("Location:../production/menuEdit.php?menuID=$menuID&durum=ok");


     } else{
         Header("Location:../production/menuEdit.php?menuID=$menuID&durum=no");

 }
                          if(isset($_POST['menuAdd']))
                          {
                            $menuSeoUrl=seo($_POST['menuName']);

                            $ayarkaydet=$db->prepare("INSERT INTO menu SET

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
                                      
                          if (isset($_POST['mUpdate'])) {
                         
                            $menuID=$_POST['menuID'];
                        
                        $ayarkaydet=$db->prepare("UPDATE menu SET
                           menuID=:menuID, 
                             menuName=:menuName,
                             menuSira=:menuSira,
                             menuSeoUrl=:menuSeoUrl,
                             menuDetail=:menuDetail,
                             menuState=:menuState
                             where menuID={$_POST['menuID']}");
                        
                        $update=$ayarkaydet->execute(array(
                           'menuID'=>$_POST['menuID'],
                         'menuName'=>$_POST['menuName'],
                         'menuSira'=> $_POST['menuSira'],
                         'menuSeoUrl'=>$_POST['menuSeoUrl'],
                         'menuDetail'=>$_POST['menuDetail'],
                         'menuState'=>$_POST['menuState']
                        
                    
                        ));
                    }
                         if ($update) {
                             
                             Header("Location:../production/menuEdit.php?menuID=$menuID&durum=ok");
                    
                    
                             } else{
                                 Header("Location:../production/menuEdit.php?menuID=$menuID&durum=no");
                    
                         }


                     
                    
                     if (isset($_POST['sliderUpdate'])) {
                                             
                                             $sliDerID=$_POST['sliderID'];
                                        
                                         
                                         $ayarkaydet=$db->prepare("UPDATE slider SET
                                            sliderID=:sliderID, 
                                              slierName=:sliderName,
                                              sliderOrder=:sliderOrder,
                                              sliderLink=:sliderLink,
                                              sliderImageLine=:sliderImageLine,
                                              sliderState=:sliderState
                                              where sliderID={$_POST['sliderID']}");
                                         
                                         $update=$ayarkaydet->execute(array(
                                            'sliderID'=>$_POST['sliderID'],
                                          'sliderName'=>$_POST['sliderName'],
                                          'sliderOrder'=> $_POST['sliderOrder'],
                                          'sliderLink'=>$_POST['sliderLink'],
                                          'sliderImageLine'=>$_POST['sliderImageLine'],
                                          'sliderState'=>$_POST['sliderState'],
                                         
                                     
                                         ));
                                     }
                                          if ($update) {
                                              
                                              Header("Location:../production/sliderEdit.php?sliderID=$sliderID&durum=ok");
                                     
                                     
                                              } else{
                                                  Header("Location:../production/sliderEdit.php?sliderID=$sliderID&durum=no");
                                     
                                          }
                    
                                          ?>


   
                        
  ?>

 
          


