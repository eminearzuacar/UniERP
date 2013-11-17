<?php

class Ogrenci extends Kisi {
    public $ogrenciNo;
    public $bolum;
    public $sinif;
    
    public function __construct($isim,$soyisim) {
        $this->isim=$isim;
        $this->soyisim=$soyisim;
    }
    
    public function notGir($dersKodu, $not) {
        return true;
    }
}
