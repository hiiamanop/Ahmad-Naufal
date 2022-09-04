<?php

    class Hewan {
        // property
        private $jenis;

        //method
        public function inisial(){
            return "ini adalah hewan";
        }

        public function hello(){
            echo "hello";
        }

        // setter => untuk mengeset suatu nilai yang ada pada suatu method  
        public function setJenis($inputanJenis){
            // setter akan mengeset suatu nilai yang diterima
            // kasus ini, akan merubah nilai dari variable $jenis
            
            // validasi
            if(!is_string($inputanJenis)) {
                throw new Exception("inputan harus String!");
            }

            $this->jenis = $inputanJenis;
            // this digunakan untuk memanggil property di dalam satu class
        }

        // getter => untuk memanggil nilai yang sudah di atur oleh setJenis
        public function getJenis(){
            return $this->jenis;
        }
    }

    class Kambing extends Hewan {
        
        public function suara() {
            return "Mbeeekkkk";
        }

        public function jenisKelamin($inputanJenisKelamin){
            return $inputanJenisKelamin;
        }
    }

    // nested
    class Sapi extends Kambing{
        private $kambings;

        // merealisasikan suatu class di dalam class
        public function realisasikanKambing(){
            $this->kambings = new Kambing();

            return $this-> kambings;
        }

        public function getClassKambing(){
            $data = $this->realisasikanKambing();
            echo $data->suara();
        }
    } 

    // realisasikan class kambing
    $kambing = new Kambing();
    // panggil function inisial
    echo "ini pemanggilan method inisial : " . $kambing->inisial();
    echo PHP_EOL;
    echo "ini adalah pemanggilan method hello : " . $kambing->hello();

    // setter
    $kambing-> setJenis("herbivora");
    echo PHP_EOL;
    echo "hasil dari setter adalah : " . $kambing->getJenis();

    // sapi
    $sapi = new Sapi();
    echo PHP_EOL;
    echo "jenis kelamin sapi : " . $sapi->jenisKelamin("jantan");
    echo PHP_EOL;
    echo $sapi-> getClassKambing();

    

?>