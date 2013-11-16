<?php

class Kisi {
    public $isim;
    public $soyisim;
    public $doğumTarihi; //sadece yil
    public $baslangicYili;
    
    public function gtuUzunIsim() {
        return $this->isim. '' . $this->soyisim;
    }
    
    public function getYas() {
        return date('Y') - $this->doğumTarihi;
    }
}
