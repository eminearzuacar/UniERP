<?php

include_once 'config.php';
include_once 'lib/Kisi.php';
include_once 'lib/Ogrenci.php';
include_once 'lib/Personel.php';
include_once 'lib/AkademikPersonel.php';
include_once 'lib/IdariPersonel.php';

$ogrenci = new Ogrenci('Arzu','Acar');
echo $ogrenci->getirUzunIsim();


//$ogrenci->isim = 'Arzu';
//$ogrenci->soyisim = 'Acar';

//echo $ogrenci->getirUzunIsim();
echo '<br />';
echo '<br />';

$personel1 = new Personel();
$personel1->isim = 'Müslüm';
$personel1->soyisim = 'Gürses';
$personel1->dogumTarihi = 1980;

echo $personel1->getirUzunIsim();
echo '<br />';
echo 'Personelin yaşı: ' . $personel1->getYas();

echo '<br/>';

$personel2 = new Personel();
$personel2->isim = 'Orhan';
$personel2->soyisim = 'Hakalmaz';