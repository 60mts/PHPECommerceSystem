<?php 

session_start();

session_destroy(); //SESSION SİLME & GÜVENLİ ÇIKIŞ.

header("location:login?durum=exit");
?>