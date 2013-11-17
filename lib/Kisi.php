<?php

class Kisi {
    public $isim;
    public $soyisim;
    public $dogumTarihi; //sadece yil
    public $baslangicYili;
    
    public function getirUzunIsim() {
        return $this->isim. ' ' . $this->soyisim;
    }
    
    public function getYas() {
        return date('Y') - $this->dogumTarihi;
    }
}
