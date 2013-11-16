<?php

class AkademikPersonel extends Personel {
    public $unvan;
    
    public function getYayinlar() {
        $yayinlar = array(
            'PHP ye giris',
            'PHP ile Nesneye Yonelik programlama',
            'PHP ve Frameworkler',
            'İleri PHP Uygulamaları'
        );
        
        return $yayinlar;
    }
}