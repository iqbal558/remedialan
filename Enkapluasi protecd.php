<?php

// class kendaraan
class kendaraan{
           //menentukan property dengan protected
           protected $scopy = "motor saya berajalan" ;

         //method protected
         protected function scopy() {
              return "scopy saya" .$this->scopy;
       }

      public function tampilkan_scopy() {
          return $this->tampilkan_scopy;
      }

}

//instansiasi class kendaraan
$kendaraan= new kendaraan () ;

//memanggil method public tampilkan_scopy dari class kendaraan
echo $kendaraan->tampilkan_scopy () ;
