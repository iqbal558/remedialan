<?php
// class kendaraan
class kendaraan{
           //menentukan property dendan private
          private $scopy="motor saya berjalan";

         //method public
          public function tampilkan_scopy () {
           return "scopy saya"   .$this->scopy;
          }


}
//instansiasi class kendaraan
$kendaraan = new kendaraan() ;

//memanggil method public tampilka_scopy dari class kendaraan
echo $kendaraan ->tampilkan_scopy() ;
