<?php
include "../partical/navbar.php";
/*
function yaz($secim, $baslik)
{
    //$bslk = $_POST['baslik'];
    $icrk = $_POST['icerik'];

    $dosya = '../'.$secim.' /metinler/'.$secim.'_'.$baslik.'_baslik.txt';
    $dosya_ac = fopen($dosya, 'w');
    fwrite($dosya_ac, $baslik);
    fclose($dosya_ac);

    $dosya1 = '../'.$secim.' /metinler/'.$secim.'_'.$baslik.'_icerik.txt';
    $dosya_ac1 = fopen($dosya1, 'w');
    fwrite($dosya_ac1, $icrk);
    fclose($dosya_ac1);
    header("location: admin.php");     
}*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $secim = $_POST['secim'];
    $baslik = $_POST['baslik'];
    $icrk = $_POST['icerik'];

    if ($secim == "ortayaş") {

        $dosya1 = '../ortayas/metinler/'. $baslik .'_baslik.txt';
        $dosya_ac1 = fopen($dosya1, 'w');
        fwrite($dosya_ac1, $baslik);
        fclose($dosya_ac1);
        header("location: admin.php");


        $dosya1 = '../ortayas/metinler/'. $baslik .'_icerik.txt';
        $dosya_ac1 = fopen($dosya1, 'w');
        fwrite($dosya_ac1, $icrk);
        fclose($dosya_ac1);
        header("location: admin.php");
    }

    if ($secim == "yaşlı") {

        $dosya1 = '../yasli/metinler/'. $baslik .'_baslik.txt';
        $dosya_ac1 = fopen($dosya1, 'w');
        fwrite($dosya_ac1, $baslik);
        fclose($dosya_ac1);
        header("location: admin.php");


        $dosya1 = '../yasli/metinler/'. $baslik .'_icerik.txt';
        $dosya_ac1 = fopen($dosya1, 'w');
        fwrite($dosya_ac1, $icrk);
        fclose($dosya_ac1);
        header("location: admin.php");
    }


}

include "../partical/footer.php";
?>