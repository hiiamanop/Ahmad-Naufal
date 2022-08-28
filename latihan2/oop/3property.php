<?php
    // membuat class
    class Mobil {

        // properties

        // visibility 
        // public => file yang lain dapat mengakses property dam function yang bersifat public
        public $roda = 4;
        public $warna = "";
        
        // private => hanya bisa diakses ole class itu sendiri
        private $knalpot = "racing ";
        
        // method untuk memanggil nilai private
        public function ambilnilaiknalpot(){
            // $this untuk memanggil apa apa yang adad pada classnya sendiri
            return $this->knalpot;
        }

        public function terbang(){
            return "terbang";
        }

        // method
        public function jalan(){
            echo "mobil berjalan ke depan";
        }

        public function mundur(){
            echo "mobil bergerak mundur";
        }

        public function nos(){
            echo "wushhhhhhhhhhh";
        }
    }

        // agar class Mobil bisa dipakai, maka perlu kita buatkan object dari class tersebut
        // variable yang merujuk ke class yang dituju
        $crv = new Mobil();

?>