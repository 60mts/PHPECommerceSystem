 <?php           
     include 'connect.php';

     session_start();
    
     include '../production/function.php';
    
 

 if (isset($_POST['menuUpdate'])) {
                         
                         $menuID=$_POST['menuID'];
                         $menuSeoUrl=seo($_POST['menuName']);
                     
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
                      'menuSeoUrl'=>$menuSeoUrl,
                      'menuDetail'=>$_POST['menuDetail'],
                      'menuState'=>$_POST['menuState'],
                     
                 
                     ));
                 }
                      if ($update) {
                          
                          Header("Location:../production/menuEdit.php?menuID=$menuID&durum=ok");
                 
                 
                          } else{
                              Header("Location:../production/menuEdit.php?menuID=$menuID&durum=no");
                 
                      }

                      ?>