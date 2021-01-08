?php

// class parent
class kendaraan {

          //property class kendaraan
          public $scopy_saya;

          //method pada class kendaraan
          function beriscopy ($saya) {
                  $this->scopy_saya=$saya;
          }

}

// class turunan atau sub class dari class kendaraan
// kita menghubungkan class dengan syntax extends
class beat extends kendaraan {
 
           // property class beat
            public $scopy_beat;
  
           // method pada class beat
            function beri scopy beat ($beat) {
                  $this->scopy_beat=$beat;
