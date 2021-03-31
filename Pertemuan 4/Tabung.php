<?php 
    class Tabung {
        private $Jarijari;
        private $tinggi;
        private $Volume;

        public function setJarijari($value) {
            $this->Jarijari = $value;
        }
        public function settinggi($value) {
            $this->tinggi = $value;
        }

        public function HitungVolume() {
            $this->Volume  = $this->Jarijari * $this->Jarijari * 3.14 * $this->tinggi;
        }

        public function getVolume() {
            return $this->Volume;
        }
        
    }
?>