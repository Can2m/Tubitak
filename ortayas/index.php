<?php

include ("../admin/conn.php");

function ac($baslik)
{
    include "../partical/../partical/navbar.php";

    $content = explode("_", file_get_contents("metinler/" . $baslik . "_baslik.txt"));
    $content = implode($content);

    session_start();
    $_SESSION['veri'] = $content;

    $content = explode("_", file_get_contents("metinler/" . $baslik . "_icerik.txt"));
    $content = implode($content);

    session_start();
    $_SESSION['veri1'] = $content;

    header("location: content.php");

    include "../partical/footer.php";
}

if (isset($_POST['btndoga'])) {
    $baslik = "Doğa";
    ac($baslik);
}

if (isset($_POST['btnsofra'])) {
    $baslik = "Sofra";
    ac($baslik);
}

if (isset($_POST['btnsanat'])) {
    $baslik = "Sanat";
    ac($baslik);
}

if (isset($_POST['btnkitap'])) {
    $baslik = "Kitap";
    ac($baslik);
}

if (isset($_POST['btnannesi'])) {
    $baslik = "Annesi";
    ac($baslik);
}

?>






<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tübitak - V3</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <?php
    include "../partical/navbar.php";
    ?>





    <div class="bg">
        <div class="container con">
            <h1>Tübitak Promeize Hoşgeldiniz</h1>
            <hr>
            <p>Bu proje, Türkiye Cumhuriyeti'nin kurucusu Mustafa Kemal Atatürk'ün hayatını ve mirasını daha
                derinlemesine
                anlamayı amaçlamaktadır. Atatürk, sadece Türk milletinin değil, aynı zamanda dünya tarihinde de iz
                bırakmış
                büyük bir liderdir. Onun öncülüğünde gerçekleşen inkılaplar ve modernleşme hareketleri, Türkiye'nin
                sosyal,<br>
                kültürel ve siyasal yapısını kökünden değiştirmiştir. Bu projede, Atatürk'ün hayatının kritik dönemleri
                incelenecek ve onun liderlik tarzı, vizyonu ve idealleri üzerine derinlemesine bir analiz yapılacaktır.
                Ayrıca, Atatürk'ün reformları ve Cumhuriyet'in kuruluşu sürecindeki stratejileri detaylı bir şekilde ele
                alınacaktır.
                <br> <br> Proje kapsamında, Atatürk'ün hayatından örnek olaylar, belgeler, fotoğraflar ve videolar
                aracılığıyla sunulacak ve katılımcıların onun liderlik yolculuğunu daha yakından takip etmelerine olanak
                sağlanacaktır. Ayrıca, Atatürk'ün prensipleri ve fikirleri üzerine yapılan araştırmalar ve çeşitli
                kaynaklardan derlenen bilgiler de sunulacaktır. Bu projenin amacı, genç nesillerin Atatürk'ün
                mirasını<br>
                ve <br>
                onun değerlerini daha iyi anlamalarına ve bu değerlerin önemini kavramalarına yardımcı olmaktır.
                Atatürk'ün
                önderliğinde gerçekleşen devrimler ve modernleşme hareketleri, sadece Türkiye'nin değil, tüm dünyanın
                dikkatini çekmiş ve ilham kaynağı olmuştur. Bu proje, Atatürk'ün düşüncelerini, ideallerini ve mirasını
                gelecek nesillere aktarmayı ve onun fikirlerinin yaşatılmasını amaçlamaktadır.
            </p>
        </div>
    </div>



    <div class="sec">
        <?php

        $ortayas = "ortayas";
        $sql = $db->prepare("SELECT id, yas, baslik, icerik, giris_saat FROM tubitak_table WHERE yas = :ortayas");
        $sql->execute(array(':ortayas' => $ortayas));

        $rows = $sql->fetchAll(PDO::FETCH_ASSOC);

        if ($rows) {

            foreach ($rows as $row) {

                echo
                    '<div class="col-lg-4">
            <div class="card mt-3" style="width: 18rem;">
                <img src="images/background.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kemal Atatürk ve ' . $row["baslik"] . '</h5>
                    <p class="card-text" style="font-weight: 300;">Mustafa Kemal ve Annesi Ne Kadar
                        Önemlidir.</p>
                    <form method="POST">
                        <button type="submit" name="btn' . $row["baslik"] . '" class="btn btn-primary">Devamını Oku...</button>
                    </form>
                </div>
            </div>
        </div>';

            }

        } else {
            echo "Metin Girişi Yapılmamıştır.";

        }
        ?>
    </div>

    <?php
    include "../partical/footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>