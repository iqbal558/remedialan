<?php

//class kendaraan
class kendaraan{
  //property
  var $acopy;
  var $purple;
  
  //method construct di jalankan pertama kali
  function_construct(){
     echo "motor saya berjalan <br/>"
  }
  
  //method descruct di jalankan terakhir
  function_descrute(){
    echo "motor saya berhenti <br/>"


  //method kendaraan
  function tampilkan_scopy(){
     return "scopy saya <br/>"
 }
 
}
//istansiasi class kendaraan
$kendaraan = New kendaraan();

//memanggil method tampilkan_scopy dari class kendaraan
echo kendaraan->tampilkan_scopy();
?>
