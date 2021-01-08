<?php
// PHP OOP part 2 pengerrian class,object,property dan method
//class kendaraan
class kendaraan {
    //property
    var $scopy;
    var $purple;
      
    //method kendaraan
    function tampilkan_scopy() {
        return "scopy saya <br/>";
    }
    
    function purple_kulit () {
        return "purple kulit <br/>";
    }
    
}
//instansiasi class kendaraan
$kendaraan = new kendaraan ();

//memanggil method tampilan scopy dari class kendaraan
echo $kendaraan -> tampilkan_scopy ();

//memanggil method purple_kulit dari class kendaraan
echo $kendaraan -> purple_kulit();
