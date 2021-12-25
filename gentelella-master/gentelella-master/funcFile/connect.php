<?php 

try{

$db=new PDO("mysql:host=localhost;dbname=emrahydata;charset=utf8",'root','');
    echo"veritabanı baglanntısı başarılı";
}
catch(PDOException $e){

    echo $e->getMessage();
}



?>