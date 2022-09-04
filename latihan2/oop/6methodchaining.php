<?php

    class StringWord {
        
        private $word;

        // constructor => sebuah method yang akan dijalankan pertama kali saat class dipanggil
        public function __construct($wordinputan){

            // merubah nilai dari property $word menjadi $wordinputan
            $this->word = $wordinputan; 
        }

        public function bold(){
            // ubah nilai dari $word dengan nilai yang baru (diformat bold)
            $this->word = sprintf("<b>%s</b>", $this->word);

            return $this;
        }

        public function underline(){
            // ubah nilai dari $word dengan nilai yang baru (diformat bold)
            $this->word = sprintf("<u>%s</u>", $this->word);

            return $this;
        }

        public function italic(){
            // ubah nilai dari $word dengan nilai yang baru (diformat bold)
            $this->word = sprintf("<i>%s</i>", $this->word);

            return $this;
        }

        // convert class StringWord output nya menjadi string
        public function __toString()
        {
            return $this->word;
        }

    }

    // pemanggilan
    $obj = new StringWord("ini menggunankan object tebal dan italic");
    echo $obj->bold()->italic();
    echo "<br>";
    echo (new StringWord("tanpa Ambil function"));
    echo "<br>";
    echo (new StringWord("bold"))->bold();
    echo "<br>";
    echo (new StringWord("italic"))->italic();
    echo "<br>";
    echo (new StringWord("underline"))->underline();
    echo "<br>";
?>