<?php include "../partical/navbar.php"; ?>


<div class="container text-start">

    <?php


   

    session_start();

    $veri = $_SESSION['veri'];

    print "<h1 style='color: #2b2b2b;'>" . $veri . "<p>";

    $veri = $_SESSION['veri1'];

    print "<p style='color: #2b2b2b;'>" . $veri . "<p>";

   

    ?>
</div>


<?php  include "../partical/footer.php";?>


