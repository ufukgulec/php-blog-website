<?php
include_once(SINIF."VT.php");
$VT=new VT();
$ayarlar=$VT->get("ayarlar");
if ($ayarlar!=false) {
        $sitebaslik=$ayarlar[0]["baslik"];
        $anahtar=$ayarlar[0]["anahtar"];
        $aciklama=$ayarlar[0]["aciklama"];
        $siteurl=$ayarlar[0]["url"];
}
else {
    echo "Elma";
}
?>