<?php

class Personel extends Kisi {
    public $birim;
    public $sicilNo;
    
    public function gorevYili() {
        return date('Y') - $this->baslangicYili;    
    }
}