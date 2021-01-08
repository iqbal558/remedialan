<?php

   //class kendaraan
 class kendaraan{
   //property
   var $scopy;
   var $purple;
   
    function_construct(){
     echo "motor saya berjalan<br/>";
     }
     //method kendaraan
     function tampilkan_scopy(){
         return "Scopy saya <br/>";
      }
 
 }
 //instansiasi class kendaraan
 $kendaraa = new kendaraan();
 
 
 //memanggil method tampilakan_scopy dari class kendaraan
 echo $kendadaan->tampilkan_scopy();
