<?php
include "../partical/navbar.php";
include ("conn.php");

if ($_POST) {

    $baslik = $_POST["baslik"];
    $yas = $_POST["secim"];
    $icerik = $_POST["icerik"];

    $query = $db->prepare("SELECT yas, baslik FROM tubitak_table WHERE yas=? AND baslik IN (SELECT baslik FROM tubitak_table WHERE baslik=?)");
    $query->execute(array($yas, $baslik));

    if ($query->rowCount() > 0) {
        /*print ('<div class="alert alert-dark" role="alert">
        Daha önce aynı başlık ve yaşta bir kayıt bulunmaktadır.
        </div>');
*/
        header("location: admin.php");
    } else {
        $sql = $db->prepare("INSERT INTO tubitak_table SET baslik=?, yas=?, icerik=?");
        $sql->execute(array($baslik, $yas, $icerik));
        header("location: admin.php");
        //echo "Kayıt başarıyla eklendi.";
    }

}

include "../partical/footer.php";
?>