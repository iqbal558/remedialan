php

// class kendaraan
class kendaraan{
        //prop
        public $purple;
        public $purple;
       
        //method kendaraan
        function tampilkan_scopy() {
                   return "scopy saya <br/>"
        }

}
//instansiasi class kendaraan
$kendaraan = new kendaraan () ;

//memanggil method tampilkan_scopy dari class kendaraan
echo $kendaraan->tampilkan_scopy () ;
