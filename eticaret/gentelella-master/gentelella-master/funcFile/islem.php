<?php 

include 'connect.php';
 
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
        if(isset($_POST['hakkimgonder']))
        {
            $ayarkaydet=$db->prepare("UPDATE hakkimizda SET
            
            aboutBaslik=:aboutBaslik,
            aboutID=:aboutID,
            aboutDetail=:aboutDetail,
            aboutImage=:aboutImage,
            aboutCareerWorkBaslik=:aboutCareerWorkBaslik,
            aboutWorkCareer=:aboutWorkCareer,
            contactBaslik=:contactBaslik,
            contactIcerk=:contactIcerk

            WHERE aboutID=0
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
            if($update)
            {
                header("location:../production/hakkimzdaSetting.php?durum=ok");
            }
                else{
                header("location:../production/hakkimzdaSetting.php?durum=no");
                }
            }



?>